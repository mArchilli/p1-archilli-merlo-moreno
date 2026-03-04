<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

class MercadoPagoController extends Controller
{
    /**
     * Precio en ARS de cada plan de pago.
     */
    private const PLAN_PRICES = [
        'pro'     => 9,
        'premium' => 18,
    ];

    /**
     * Crea una preferencia de pago en MercadoPago y redirige al Checkout Pro.
     * Llamado desde AuthController cuando el usuario elige un plan de pago.
     */
    public function createPreference(Request $request)
    {
        $registerData = $request->session()->get('pending_register');
        $role = $registerData['role'] ?? null;

        if (!$role || !isset(self::PLAN_PRICES[$role])) {
            return redirect()->route('auth.register.form')
                ->with('feedback.message', 'No se encontraron datos de registro. Por favor completá el formulario nuevamente.')
                ->with('feedback.type', 'danger');
        }

        // Generar token único y persistir el registro pendiente en la DB
        $token = Str::uuid()->toString();

        DB::table('pending_registrations')->insert([
            'token'      => $token,
            'name'       => $registerData['name'],
            'lastName'   => $registerData['lastName'],
            'email'      => $registerData['email'],
            'password'   => Hash::make($registerData['password']),
            'role'       => $role,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Ya no se necesitan los datos en sesión
        $request->session()->forget('pending_register');

        MercadoPagoConfig::setAccessToken(config('services.mercadopago.access_token'));

        $price = self::PLAN_PRICES[$role];
        $planLabel = ucfirst($role);

        $client = new PreferenceClient();

        try {
            $preferenceData = [
                'items' => [
                    [
                        'title'       => "LibraLink - Plan {$planLabel}",
                        'description' => "Suscripción al plan {$planLabel} de LibraLink",
                        'quantity'    => 1,
                        'unit_price'  => (float) $price,
                        'currency_id' => 'ARS',
                    ],
                ],
                'back_urls' => [
                    'success' => route('payment.success'),
                    'failure' => route('payment.failure'),
                    'pending' => route('payment.pending'),
                ],
                // El token identifica el registro pendiente al volver de MP
                'external_reference' => $token,
            ];

            // En producción se redirige automáticamente sin mostrar botón
            if (app()->isProduction()) {
                $preferenceData['auto_return'] = 'approved';
            }

            $preference = $client->create($preferenceData);

            return redirect()->away($preference->init_point);

        } catch (MPApiException $e) {
            // Si falla la preferencia, limpiar el registro pendiente
            DB::table('pending_registrations')->where('token', $token)->delete();

            $apiResponse = $e->getApiResponse();
            Log::error('MercadoPago MPApiException', [
                'message'     => $e->getMessage(),
                'status_code' => $apiResponse->getStatusCode(),
                'content'     => $apiResponse->getContent(),
            ]);

            return redirect()->route('auth.register.form')
                ->with('feedback.message', 'No se pudo iniciar el proceso de pago. Intentá nuevamente.')
                ->with('feedback.type', 'danger');

        } catch (\Exception $e) {
            DB::table('pending_registrations')->where('token', $token)->delete();

            Log::error('MercadoPago Exception', [
                'message' => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
            ]);

            return redirect()->route('auth.register.form')
                ->with('feedback.message', 'No se pudo iniciar el proceso de pago. Intentá nuevamente.')
                ->with('feedback.type', 'danger');
        }
    }

    /**
     * Callback de pago aprobado: crea el usuario y lo redirige al login.
     */
    public function success(Request $request)
    {
        $token = $request->query('external_reference');

        if (!$token) {
            return redirect()->route('auth.register.form')
                ->with('feedback.message', 'No se pudo verificar el pago. Contactá con soporte.')
                ->with('feedback.type', 'danger');
        }

        $pending = DB::table('pending_registrations')->where('token', $token)->first();

        if (!$pending) {
            // Puede que ya se haya procesado (doble redirect)
            return redirect()->route('auth.login.form')
                ->with('feedback.message', 'Tu cuenta ya fue creada. Iniciá sesión para continuar.');
        }

        // Verificar que el pago efectivamente fue aprobado
        $status = $request->query('collection_status') ?? $request->query('status');
        if ($status && $status !== 'approved') {
            return redirect()->route('auth.register.form')
                ->with('feedback.message', 'El pago no fue aprobado (estado: ' . $status . '). Intentá nuevamente.')
                ->with('feedback.type', 'warning');
        }

        // Crear el usuario (la contraseña ya viene hasheada)
        User::create([
            'name'     => $pending->name,
            'lastName' => $pending->lastName,
            'email'    => $pending->email,
            'password' => $pending->password,
            'role'     => $pending->role,
        ]);

        // Eliminar el registro pendiente
        DB::table('pending_registrations')->where('token', $token)->delete();

        Log::info('Usuario registrado tras pago MP', ['email' => $pending->email, 'role' => $pending->role]);

        return redirect()->route('auth.login.form')
            ->with('feedback.message', '¡Pago realizado con éxito! Tu cuenta ha sido creada. Iniciá sesión para continuar.');
    }

    /**
     * Callback de pago fallido.
     */
    public function failure(Request $request)
    {
        // Limpiar el registro pendiente si el usuario cancela
        $token = $request->query('external_reference');
        if ($token) {
            DB::table('pending_registrations')->where('token', $token)->delete();
        }

        return redirect()->route('auth.register.form')
            ->with('feedback.message', 'El pago fue rechazado o cancelado. Podés intentarlo nuevamente.')
            ->with('feedback.type', 'danger');
    }

    /**
     * Callback de pago pendiente.
     */
    public function pending(Request $request)
    {
        return redirect()->route('auth.register.form')
            ->with('feedback.message', 'Tu pago está pendiente de acreditación. Cuando se confirme, contactá con soporte para activar tu cuenta.')
            ->with('feedback.type', 'warning');
    }
}

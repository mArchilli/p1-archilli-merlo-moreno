<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function usersadm(){
        $users = User::all();
        return view('usersadm', [
            'usersadm' => $users,
        ]);
    }

    public function loginForm()
    {
        return view('auth.login-form');
    }

    public function editForm(int $id)
    {
        return view('user.edit-user', [
            'user' => User::findOrFail($id),
        ]);
    }

    public function editProcess(int $id, Request $request) {
        $request->validate([
            'name' => 'required|min:2',
            'lastName' => 'required|min:2',
            'email' => 'required|email',
            'role' => 'required',
        ], [
            'name.required' => 'El nombre debe ser ingresado',
            'lastName.required' => 'El apellido debe ser ingresado',
            'email.required' => 'El correo debe ser ingresado',
            'role.required' => 'El rol debe ser ingresado',
        ]);

        $input = $request->only(['name', 'lastName', 'email', 'role']);

        $usuario = User::findOrFail($id);

        // Verificar si se proporciona una nueva contraseña y hashearla si es necesario
        if ($request->filled('password')) {
            $input['password'] = Hash::make($request->input('password'));
        } else {
            $input['password'] = $usuario->password;
        }

        // Actualizar el usuario con los datos proporcionados
        $usuario->update($input);

        // Construir el nombre completo del usuario
        $userName = $input['name'] . ' ' . $input['lastName'];

        // Redirigir con un mensaje de éxito
        return redirect()
            ->route('usersadm')
            ->with('feedback.message', 'El usuario <b>"' . e($userName) . '"</b> se editó con éxito.');
    }


    public function loginProcess(Request $request)
{
    $credentials = $request->only(['email', 'password']);

        // Si no se puede autenticar
        if (!auth()->attempt($credentials)) {
            return redirect()
                ->back(fallback: route('auth.login.form'))
                ->withInput()
                ->with('feedback.message', 'Las credenciales ingresadas no coinciden con nuestros registros')
                ->with('feedback.type', 'danger');
        }

        // Redirige a la ruta que maneja la redirección por rol
        return redirect()->route('redirect.after.login')->with('feedback.message', 'Inicio exitoso. ¡Hola de nuevo!');
    }


    public function logoutProcess(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
        ->route('auth.login.form')
        ->with('feedback.message', 'Cierre de sesión correcto. ¡Te esperamos pronto!');
    }

    public function registerForm()
    {
        return view('auth.register-form');
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required'
            
        ], [
            'name.required' => 'El campo nombre debe ser completado.',
            'lastName.required' => 'El campo apellido debe ser completado.',
            'email.required' => 'El campo correo debe ser completado.',
            'password.required' => 'El campo contraseña debe ser completado.'
        ]);

        $input = $request->only(['name', 'lastName', 'email', 'password']);
        $input['password'] = Hash::make($request->password); //Hasheo a la clave
        $input['role'] = 'user'; // Valor por defecto

        User::create($input);

        return redirect()
            ->route('auth.login.form')
            ->with('feedback.message', 'Inicia sesion para continuar.');
    }

}

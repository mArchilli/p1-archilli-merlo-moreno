<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function users(){
        $users = User::all();
        return view('users', [
            'users' => $users,
        ]);
    }

    public function loginForm()
    {
        return view('auth.login-form');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        // si no me puedo autenticar
        if(!auth()->attempt($credentials)) {
            return redirect()
                ->back(fallback: route('auth.login.form'))
                ->withInput()
                ->with('feedback.message', 'Las credenciales ingresadas no coinciden con nuestros registros')
                ->with('feedback.type', 'danger');
        }

        return redirect()
        ->route('admin')
        ->with('feedback.message', 'Inicio exitoso. ¡Hola de nuevo!');
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
        $input['rol'] = 'user'; // Valor por defecto

        User::create($input);

        return redirect()
            ->route('catalogo')
            ->with('feedback.message', 'Bienvenido/a <b>"' . e($input['name']) . '"</b>.');
    }

}

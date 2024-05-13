<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
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
}

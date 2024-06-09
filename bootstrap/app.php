<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )


    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo(function(Request $request) {
            session()->flash('feedback.message', 'Se requiere iniciar sesión para acceder a este contenido.');
            session()->flash('feedback.type', 'danger');
            return route('auth.login.form');
        });

        $middleware->alias([
            'check-user-rol' => \App\Http\Middleware\CheckUserRole::class,
            'check-admin-rol' => \App\Http\Middleware\CheckAdminRole::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role !== 'admin') {
            // Redirigir al usuario a la página de inicio
            return redirect()->route('index')
            ->with('feedback.message', 'Es necesario permisos de administrador.')
            ->with('feedback.type', 'danger');
        }

        return $next($request);
    }
}

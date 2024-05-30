<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RolAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
        // Verifica si el usuario no está autenticado o si está autenticado y su rol es diferente de 1
        if (!Auth::check() || (Auth::check() && Auth::user()->rol === 1)) {
            return redirect()->route('welcome');
        }

        return $next($request);
    }
}

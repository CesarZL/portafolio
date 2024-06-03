<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = Session::get('locale') ?? 'es';
        Session::put('locale', $locale);
        App::setLocale($locale);

        return $next($request);
    }
}

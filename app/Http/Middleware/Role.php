<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $valRole = \Auth::user() -> role;
        if($role == 'admin' && $valRole == 1) return $next($request);
        if($role == 'writer' && ($valRole == 2 || $valRole == 1)) return $next($request);
        return redirect('/');
    }
}

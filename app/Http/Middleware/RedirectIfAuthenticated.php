<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Auth\LoginController;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response // This method checks if the user is authenticated and redirects them if they are. 
//gards are optional and can specify which authentication guards to check.
    // If the user is authenticated, they are redirected to the home route.
    // If no guards are specified, the default guard is used.
    // The method returns a RedirectResponse if the user is authenticated, otherwise it continues with the
    //gards is an array of authentication guards to check. If no guards are specified, it defaults to the null guard.
    
    {
        $guards = empty($guards) ? [null] : $guards; // If no guards are specified, use the default guard.

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}

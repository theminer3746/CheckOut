<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\User\LoginController;

class UnauthenticateUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(LoginController::isLoggedIn()){
            return redirect('/');
        }

        return $next($request);
    }
}

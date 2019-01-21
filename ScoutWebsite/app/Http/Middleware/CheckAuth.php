<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckAuth
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
        $user = \Auth::user();
        $userAuth = $user->authorized;

        //TODO REDIRECT
        if ($userAuth == 0) {
            return redirect('403');
            exit;
        }
        return $next($request);
    }
}

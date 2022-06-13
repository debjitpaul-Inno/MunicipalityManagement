<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check())
        {
            if (!checkUserRole($role)) {
                abort(403);
//            Auth::logout();
//            Session()->flush();
//            return redirect()->route('login');
            }
            return $next($request);
        }else{
            return redirect()->route('customer-login');
        }

    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        $role = session('role');

        if($role==null){
            return redirect('/admin/login')->withErrors(trans('web._login_first'));
        }

        return $next($request);
    }
}

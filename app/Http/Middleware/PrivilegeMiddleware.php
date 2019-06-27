<?php

namespace App\Http\Middleware;

use Closure;

class PrivilegeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $role = session('role');

        if(in_array($role, $roles)){
            return $next($request);
        }

        if($role==='admin'){
            return redirect('/login')->withErrors(trans('web._not_allowed'));
        }else{
            return redirect('/admin/login')->withErrors(trans('web._not_allowed'));
        }

    }
}

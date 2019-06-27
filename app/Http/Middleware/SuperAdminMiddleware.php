<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdminMiddleware
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

        if($role!=='admin'){
            return redirect('/admin/login')->withErrors(trans('web._not_allowed'));
        }

        return $next($request);
    }
}

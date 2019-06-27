<?php

namespace App\Http\Middleware;

use Closure;

class KoperasiMiddleware
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

        if($role!=='koperasi'){
            return redirect('/login')->withErrors(trans('web._not_allowed'));
        }

        return $next($request);
    }
}

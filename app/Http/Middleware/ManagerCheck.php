<?php

namespace Edaacil\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ManagerCheck
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
        if (! Auth::user()) {
            return redirect(route('manager.auth.view'));
        }
        if (!Auth::user()->role == 'Manager')
        {
            return redirect('/manager/login');
        }
        return $next($request);
    }
}

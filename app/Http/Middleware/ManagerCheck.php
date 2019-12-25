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
        if (!Auth::user()->role == 'Manager')
        {
            return redirect('/')->with('error','Unauthorized Action,Access Denied !!');
        }
        return $next($request);
    }
}

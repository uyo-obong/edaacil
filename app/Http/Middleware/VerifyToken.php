<?php

namespace Edaacil\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyToken
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
        if (! $request->expectsJson()) {
            dd($request);
           return redirect(route('agent.dashboard.view'));
        }
        return $next($request);
    }
}

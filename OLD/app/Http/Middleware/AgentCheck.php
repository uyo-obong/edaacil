<?php

namespace Edaacil\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AgentCheck
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
            return redirect(route('agent.auth.view'));
        }

        if (Auth::user()->role !== 'Agent')
        {
            return redirect('/agent/login');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class is_admin
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
        if(auth()->user()->is_admin == 'admin'){
            return $next($request);
        }
        return back()->withErrors([
            'messageAdmin'   => 'sory you not admin',
        ]);

    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class SuperMiddleware
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
        if($request->user()->hasRole('SuperAdmin')){
            return $next($request);
        }
        else{
            return redirect()->route('admin');
        }
    }
}

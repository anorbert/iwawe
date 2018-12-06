<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class HumanResourceMiddleware
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
        if(Auth()->user()->roleId == 6){
            return $next($request);
        }
        return redirect('home');
    }
}

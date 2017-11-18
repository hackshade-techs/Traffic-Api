<?php

namespace App\Http\Middleware;

use Closure;

class CustomerCareMiddleware
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
        if (auth()->user()->hasRole('customercare')) {
            return $next($request);
        }else{
            abort();
        }
    }
}

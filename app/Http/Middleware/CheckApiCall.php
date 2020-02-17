<?php

namespace App\Http\Middleware;

use Closure;

class CheckApiCall
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
        if ($request->header('api_key') == env('MYPUBLIC_API_KEY')) {
            return $next($request);
        }
    }
}

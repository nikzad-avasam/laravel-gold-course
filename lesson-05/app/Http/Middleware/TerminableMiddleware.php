<?php

namespace App\Http\Middleware;

use Closure;

class TerminableMiddleware
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
      echo 'handle method of middleware <hr>';
        return $next($request);
    }
    public function terminate(){
      echo 'terminate method runs.<hr>';
    }
}

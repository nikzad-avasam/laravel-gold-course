<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        if ($request->age < 18) {
          echo 'your age is under 18';
          die;
        }
        return $next($request); // middleware ok

        // $r = $next($request); // middleware is ok
        //
        // if ($request->age < 18) {
        //   echo 'your age is under 18';
        //   die;
        // }
        //
        // return $r;
    }
}

<?php

namespace App\Http\Middleware;
use Closure;


class Lenguaje 
{
    public function handle($Request, Closure $next)
    {
        


        return $next($request);
    }
}

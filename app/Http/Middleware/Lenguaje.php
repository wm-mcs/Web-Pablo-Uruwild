<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Closure;


class Lenguaje 
{
    public function handle($Request, Closure $next)
    {
        if(Auth::guest() || Auth::user()->first_name == 'Mauricio')
        {
          // Si la sesión no existe hacer lo siguiente
          if(!Session::has('lenguaje'))
          {
            // I p   d e l   u s u a r i o
            $ip_del_user  = strval($_SERVER['REMOTE_ADDR']); 
            $data_user    = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_del_user));

            dd($data_user);

          }

          // Si la sesión existe retornar





          return $next($request);
        }


        return $next($request);
    }
}

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

            if($data_user->geoplugin_continentCode != 'SA')
            {
              // diferente de SudAmerica 
              Session::put('lenguaje','EN');
              
            }
            else
            {
              // SudAmerica
              Session::put('lenguaje','ES');
            }


            /*
              First Method

              $request->route()->parameters();

              This method will return an array of all the parameters.

              Second Method

              $request->route('parameter_name');

              Here parameter_name refers to what you called the parameter in the route.
            */

              // Nombre de la route $Request->route()->getName()
              // Parametros $Request->route()->parameters()
              // Un parametro específico $Request->route('parameter_name') // si no está me da null

              // Cosas a hacer
              // Ver si el parametro idioma es diferente al parametro de sesión
              // Tomar accion de eso
              // Debería ganar predominar el parametro de la ruta, porque de está manera se puede enviar link y se mantiene

          }

          // Si la sesión existe retornar





          return $next($request);
        }


        return $next($request);
    }
}

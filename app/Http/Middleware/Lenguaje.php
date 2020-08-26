<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Helpers\HelpersSessionLenguaje;


use Closure;


class Lenguaje 
{
    public function handle($Request, Closure $next)
    {
       
          
            // I p   d e l   u s u a r i o
            $ip_del_user  = strval($_SERVER['REMOTE_ADDR']); 
            $data_user    = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_del_user)); 

            if($data_user->geoplugin_continentCode != 'SA')
            {
              // diferente de SudAmerica 
              HelpersSessionLenguaje::getAndPutSessionLenguaje('EN');              
            }
            else
            {
              // SudAmerica
              HelpersSessionLenguaje::getAndPutSessionLenguaje('ES'); 
            }

            //se debe verificar el parametro que viene desde la ruta para saber cual es y se lo compara con los idiomas instalados            
            HelpersSessionLenguaje::getAndPutSessionLenguaje(null,$Request->route('lenguaje'));

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

          




          return $next($Request);
        


        
    }
}

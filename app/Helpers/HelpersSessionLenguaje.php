<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Session;



class HelpersSessionLenguaje
{


    public static  function getSessionPorDefecto()
    {
        return 'ES';
    }

    /**
     * crea la sesión y la devuelve
     *
     */
    public static function getAndPutSessionLenguaje($lenguaje = null,$parametro_de_la_ruta = null)
    {
        // se está pidiendo la sesion
        if($lenguaje === null)
        {
            if(!Session::has('lenguaje'))
            {
               Session::put('lenguaje',self::getSessionPorDefecto());
            }   
        }
        else
        {
            if(!in_array($lenguaje, config('lenguajes')))
            {
               if(!Session::has('lenguaje'))
               {
                 Session::put('lenguaje',self::getSessionPorDefecto());
               }               
            }
            else
            {
               Session::put('lenguaje',$lenguaje);
            } 
        }

        if($parametro_de_la_ruta != null && in_array($parametro_de_la_ruta, config('lenguajes')) )
        {
            Session::put('lenguaje',$parametro_de_la_ruta);
        }              
       
        return Session::get('lenguaje');        
    }


    /**
     * Me valida la ruta que viene y me redirecciona si hay incompatibilidades.
     * 
     * 
     */
    public static function validarRouteTeniendoEnCuentaElLenguaje($lenguaje_que_viene_de_la_ruta,$route_en_cuestion)
    {   
        // L a   r u t a   n o   t i e n e   e l   p a r a m e t r o   i n d i c a d o 
        if($lenguaje_que_viene_de_la_ruta == '{lenguaje}')
        {
            $Validacion = false;
            $Route = route($route_en_cuestion,$this->getAndPutSessionLenguaje(null,null));

            return [
                      'Validacion' = $Validacion,
                      'Route'      = $Route
                   ];
        }
        else
        {
            return [
                      'Validacion' = true
                   ];
        }
    }


    
}
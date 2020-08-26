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
        if($lenguaje == null)
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
               if(!Session::has('lenguaje'))
               {
                 Session::put('lenguaje',$lenguaje);
               } 
               else
               {
                 if(Session::get('lenguaje') != $lenguaje)
                 {
                    Session::put('lenguaje',self::getSessionPorDefecto());
                 }
               }
            } 
        }

        dd($parametro_de_la_ruta,config('lenguajes'),Session::get('lenguaje'));

        if($parametro_de_la_ruta != null && in_array($parametro_de_la_ruta, config('lenguajes')) && Session::get('lenguaje') != $parametro_de_la_ruta )
        {
            Session::put('lenguaje',$parametro_de_la_ruta);
        }       
       
        return Session::get('lenguaje');        
    }


    
}
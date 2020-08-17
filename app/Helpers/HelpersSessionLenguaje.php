<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Session;



class HelpersSessionLenguaje
{


    public function getSessionPorDefecto()
    {
        return 'es';
    }

    /**
     * crea la sesión y la devuelve
     *
     */
    public static function getAndPutSessionIdioma($idioma = null)
    {
       
        if(!Session::has('idioma'))
        {
           Session::put('idioma',$this->getSessionPorDefecto());
        }
        else
        {
            if($idioma != null)
            {
                Session::put('idioma',$idioma);
            }
        }

        return Session::get('idioma');
        
    }
}
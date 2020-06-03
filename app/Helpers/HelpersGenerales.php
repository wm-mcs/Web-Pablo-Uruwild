<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Cache;




class HelpersGenerales
{

    /**
     * Convierte una cadena y la prepara para URL
     */
    public static function helper_convertir_cadena_para_url($cadena)
    {

        $cadena = strtolower(trim($cadena));
        //quito caracteres - 
        $cadena = str_replace('-' ,' ', $cadena);
        $cadena = str_replace('_' ,' ', $cadena);
        $cadena = str_replace('/' ,' ', $cadena);
        $cadena = str_replace('|' ,' ', $cadena);
        $cadena = str_replace('"' ,' ', $cadena);
        $cadena = str_replace('  ' ,' ', $cadena);
        $cadena = str_replace('   ' ,' ', $cadena);
        $cadena = str_replace(' ' ,'-', $cadena);
        $cadena = str_replace('?' ,'', $cadena);
        $cadena = str_replace('¿' ,'', $cadena);
        return $cadena;
    
    }

    public static function helper_olvidar_este_cache($nombre_de_cache)
    {
        if(Cache::has($nombre_de_cache))
        {
         Cache::forget($nombre_de_cache);
        }
    }



    public static function helper_dame_sino_es_null_o_vacio($variable)
    {
      if(($variable != null) || ($variable != ''))
      {
        return $variable;
      }
      else
      {
        return false;
      }
    }

}
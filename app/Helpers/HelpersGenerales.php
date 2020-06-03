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


    /*  S i   e s t á   v a c i o   o   e s   n u e l o   d e v u e l v e   f a l s e   d e   l o   c o n t r a r i o   
        e n t r e g a   e l   v a l o r  */
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
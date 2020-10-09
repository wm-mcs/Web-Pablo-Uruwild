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
        $cadena = str_replace('.' ,'', $cadena);
        $cadena = str_replace(',' ,'', $cadena);
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


    public static function helper_convertir_caractereres_entidades_blog_o_similares($cadena)
    {
        $cadena = str_replace('(H1)' ,'<h1 class="post-individual-section-h1">', $cadena);
        $cadena = str_replace('(/H1)' ,'</h1><hr class="post-hr"           >', $cadena);

        //parrafos
        $cadena = str_replace('(P)' ,'<p class="post-individual-p">', $cadena);
        $cadena = str_replace('(/P)' ,'</p>', $cadena);

        $cadena = str_replace('(I)' ,'<span class="font-italic">', $cadena);  
        $cadena = str_replace('(/I)' ,'</span>', $cadena);


        //text bold  
        $cadena = str_replace('(COLOR_SECONDARY)' ,'<span class="text-color-secondary">', $cadena);  
        $cadena = str_replace('(/COLOR_SECONDARY)' ,'</span>', $cadena);

        $cadena = str_replace('(B)' ,'<strong>', $cadena);  
        $cadena = str_replace('(/B)' ,'</strong>', $cadena);
        
        //titulos
        $cadena = str_replace('(T)' ,'<h2 class="post-individual-section-titulo">', $cadena);
        $cadena = str_replace('(/T)' ,'</h2>', $cadena);

         //sub titulos
        $cadena = str_replace('(ST)' ,'<h3 class="post-individual-section-sub-titulo">', $cadena);
        $cadena = str_replace('(/ST)' ,'</h3>', $cadena);

        //mensaje box
        $cadena = str_replace('(MBOX)' ,'<div class="post-individual-section-mensaje-box">', $cadena);
        $cadena = str_replace('(/MBOX)' ,'</div>', $cadena);

        //ul
        $cadena = str_replace('(U)' ,'<ul class="post-individual-section-ul">', $cadena);
        $cadena = str_replace('(/U)' ,'</ul>', $cadena);

        //li
        $cadena = str_replace('(L)' ,'<li class="post-individual-section-li"> 
                                                          
            ', $cadena);
        $cadena = str_replace('(/L)' ,'</li>', $cadena);

        //links
        $cadena = str_replace('(A)' ,'<a class="post-individual-links" href="', $cadena);
        $cadena = str_replace('(/A)' ,'">', $cadena);
        $cadena = str_replace('(AT)' ,'', $cadena);
        $cadena = str_replace('(/AT)' ,'</a>', $cadena);

        //img
        $cadena = str_replace('(IMG)' ,'<img class="post-img-secundarias" data-src="', $cadena);
        $cadena = str_replace('(/IMG)' ,'">', $cadena);

        $cadena = str_replace('(IMGT)' ,'<span class="post-img-texto" >', $cadena);
        $cadena = str_replace('(/IMGT)' ,'</span>', $cadena);

        $cadena = str_replace('(YOU)' ,'<div class="video-responsive" > <iframe  src="https://www.youtube.com/embed/', $cadena);
        $cadena = str_replace('(/YOU)' ,'" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', $cadena);

        $cadena = str_replace('(UT)' ,'<ul class="timeline mt-2 mb-4" >', $cadena);
        $cadena = str_replace('(/UT)' ,'</ul>', $cadena);

        $cadena = str_replace('(LT)' ,'<li>', $cadena);
        $cadena = str_replace('(/LT)' ,'</li>', $cadena);

        $cadena = str_replace('(TLT)' ,'<span class="text-color-secondary sub-titulos-class text-bold mb-2" >', $cadena);
        $cadena = str_replace('(/TLT)' ,'</span>', $cadena);

        

        /*return htmlentities($cadena, ENT_QUOTES | ENT_IGNORE, "UTF-8");*/ 
        return $cadena; 
    }

}
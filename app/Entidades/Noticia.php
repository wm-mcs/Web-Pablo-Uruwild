<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Helpers\HelpersGenerales;




class Noticia extends Model
{

    protected $table ='noticias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];



    protected $appends = ['url_img_portada','route','url_img_portada_chica','fecha_personalizada'];





    /**
     * PAra busqueda por nombre
     */
    public function scopeName($query, $name)
    {
        //si el paramatre(campo busqueda) esta vacio ejecutamos el codigo
        /// trim() se utiliza para eliminar los espacios.
        ////Like se usa para busqueda incompletas
        /////%% es para los espacios adelante y atras
        if (trim($name) !="")
        {                        
           $query->where('name', "LIKE","%$name%"); 
        }
        
    }

    public function scopeActive($query)
    {
                               
           $query->where('estado', "si"); 
                
    }


    public function getUrlImgPortadaAttribute()
    {
        
        return url().'/imagenes/Noticias/'.$this->img.$this->id.'-portada'.'.jpg';
    }

       public function getPathUrlImgPortadaAttribute()
       {
         return public_path().'/imagenes/Noticias/'.$this->img.$this->id.'-portada'.'.jpg';
       }

    public function getUrlImgPortadaChicaAttribute()
    {
        
        return url().'/imagenes/Noticias/'.$this->img.$this->id.'-portada-chica'.'.jpg';
    }

    public function getUrlImgAdicionalAttribute()
    {
        
        return url().'/imagenes/Noticias/'.$this->img.$this->id.'-adicional'.'.jpg';
    }

        public function getPathUrlImgAdicionalAttribute()
        {
         return public_path().'/imagenes/Noticias/'.$this->img.$this->id.'-adicional'.'.jpg';
        }

    public function getUrlImgAdicionalChicaAttribute()
    {        
        return url().'/imagenes/Noticias/'.$this->img.$this->id.'-adicional-chica'.'.jpg';
    }


    public function getRouteAttribute()
    {
        
        return route('get_pagina_noticia_individual', [$this->name_slug, $this->id]);
    }

    public function getRouteAdminAttribute()
    {
        
        return route('get_admin_noticias_editar', $this->id);
    }

    public function getNameSlugAttribute()
    {
        return HelpersGenerales::helper_convertir_cadena_para_url($this->name);
    }


    public function getContenidoRenderAttribute()
    { $cadena = $this->description;


        $cadena = str_replace('(H1)' ,'<h1 class="post-individual-section-h1">', $cadena);
        $cadena = str_replace('(/H1)' ,'</h1><hr class="post-hr"           >', $cadena);

        //parrafos
        $cadena = str_replace('(P)' ,'<p class="post-individual-p">', $cadena);
        $cadena = str_replace('(/P)' ,'</p>', $cadena);

        $cadena = str_replace('(I)' ,'<span class="font-italic">', $cadena);  
        $cadena = str_replace('(/I)' ,'</span>', $cadena);


        //text bold  
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

        

        return htmlentities($cadena, ENT_QUOTES | ENT_IGNORE, "UTF-8"); 
    }

   


    public function getFechaPersonalizadaAttribute()
    {
        $fecha = Carbon::parse($this->created_at);

        return $fecha->format('d/m/Y');
    }

    

    
}
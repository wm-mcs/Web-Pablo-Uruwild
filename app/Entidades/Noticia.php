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
    { 

      $cadena = $this->description;

      return HelpersGenerales::helper_convertir_caractereres_entidades_blog_o_similares($cadena);
        
    }

   


    public function getFechaPersonalizadaAttribute()
    {
        $fecha = Carbon::parse($this->created_at);

        return $fecha->format('d/m/Y');
    }

    

    
}
<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Servicios\ServiciosDeEntidades;
use App\Helpers\HelpersGenerales;
use Carbon\Carbon;
use App\Traits\entidadesMetodosComunes;
class Tour extends Model
{

    use entidadesMetodosComunes;

    protected $table ='tours';

    
    protected $fillable     = ['name', 'description'];
    protected $img_key      = 'tour_id';
    



    // A t r i b u t o s   m u t a d o s
    

     public function getFechaAttribute()
     {
        return Carbon::parse($this->fecha_inicio);
     }


   
    public function scopeName($query, $name)
    {        
        if (trim($name) !="")
        {                        
           $query->where('name', "LIKE","%$name%"); 
        }        
    }

    public function scopeActive($query)
    {                               
        $query->where('estado', "si");                 
    }


    

    public function getRouteAdminAttribute()
    {
        return route('get_admin_tours_editar',$this->id);
    }

    public function getRouteAttribute()
    {
        return route('get_pagina_tour_individual', [HelpersGenerales::helper_convertir_cadena_para_url($this->name) ,$this->id]);
    }

    public function getContenidoRenderAttribute()
    { 

      $cadena = $this->description;

      return HelpersGenerales::helper_convertir_caractereres_entidades_blog_o_similares($cadena);
        
    }
    
    
}
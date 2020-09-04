<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\HelpersGenerales;
use App\Traits\entidadesMetodosComunes;
use App\Helpers\HelpersSessionLenguaje;
use App\Traits\entidadesMetodosLenguajeAttributes;




class Cabaña extends Model
{

    use entidadesMetodosComunes;
    use entidadesMetodosLenguajeAttributes;

    protected $table              ='cabañas';    
    protected $fillable           = ['name'];
    protected $appends            = ['imagen_principal'];
    protected $img_key            = 'cabaña_id';
    protected $route_admin_name   = 'get_admin_cabañas_editar';
    




    // A t r i b u t o s   m u t a d o s  
    public function getRouteAttribute()
    {
       return route('get_pagina_cabaña_individual', [HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null),HelpersGenerales::helper_convertir_cadena_para_url($this->name) ,$this->id]);
    }

    public function getContenidoRenderAttribute()
    {        
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      $cadena   = $this->getPropiedadValorSegunLenguaje($Lenguaje, 'description',false);       

      return HelpersGenerales::helper_convertir_caractereres_entidades_blog_o_similares($cadena);    
    }


    /**
     * Me da el nombre ya teniendo en cuenta el lenguaje que está en la sesión.
     */
    public function getNameFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'name');  
    }

    public function getDescripcionBreveFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'descripcion_breve');  
    }



    
   
    
}
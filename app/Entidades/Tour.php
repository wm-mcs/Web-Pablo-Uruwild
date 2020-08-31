<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\HelpersGenerales;
use Carbon\Carbon;
use App\Traits\entidadesMetodosComunes;
use App\Traits\entidadesMetodosLenguajeAttributes;
use Illuminate\Support\Facades\Session;
use App\Helpers\HelpersSessionLenguaje;

class Tour extends Model
{

    use entidadesMetodosComunes;
    use entidadesMetodosLenguajeAttributes;

    protected $table            ='tours';    
    protected $fillable         = ['name', 'description'];
    protected $img_key          = 'tour_id';
    protected $route_admin_name = 'get_admin_tours_editar';
    



    // A t r i b u t o s   m u t a d o s   
    public function getFechaAttribute()
    {
       return Carbon::parse($this->fecha_inicio);
    }

    public function getFechaLimiteReservaAttribute() 
    {
       return $this->fecha->subDays(3);
    }

    public function getPrecioRedondeadoAttribute() 
    {
       return  round($this->precio);
    }

    public function getLlamadoALaAccionTextAttribute()
    {
      if(($this->call_to_action != null) &&( $this->call_to_action != ''))
      {
        return trim($this->call_to_action);
      }
      else
      {
        'Conocé cómo está armado';
      }
    }    

    public function getRouteAttribute()
    {  
       return route('get_pagina_tour_individual', [HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null), HelpersGenerales::helper_convertir_cadena_para_url($this->name) ,$this->id]);
    }

    public function getContenidoRenderAttribute()
    { 
       $cadena = $this->description;

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
    
    
}
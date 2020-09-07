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
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      $Valor    = $this->getPropiedadValorSegunLenguaje($Lenguaje, 'call_to_action');  

      if(($this->call_to_action != null) &&( $this->call_to_action != ''))
      {
        return trim($Valor);
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

    public function getProximasFechaFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);
      if($Lenguaje == 'ES')
      {
        $Texto = 'Próxima fecha ';
      }
      elseif($Lenguaje == 'EN')
      {
        $Texto = 'Next date ';
      }
      else
      {
        $Texto = 'Próxima fecha ';
      }

      return   $Texto . $this->fecha->format('d-m-Y');
    }

    public function getCantidadDeDiasTextoFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);
      if($Lenguaje == 'ES')
      {
        $Texto = 'Cantidad de días del tour';
      }
      elseif($Lenguaje == 'EN')
      {
        $Texto = 'Number of days of the tour';
      }
      else
      {
        $Texto = 'Cantidad de días del tour';
      }

      return   $Texto ;
    }

    public function getCallToActionListaFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);
      if($Lenguaje == 'ES')
      {
        $Texto = 'Explorar el contenido del tour ';
      }
      elseif($Lenguaje == 'EN')
      {
        $Texto = 'Explore the content of the tour';
      }
      else
      {
        $Texto = 'Explorar el contenido del tour ';
      }

      return   $Texto ;
    }
    
    
}
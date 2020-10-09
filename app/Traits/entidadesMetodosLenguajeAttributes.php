<?php

namespace App\Traits;
use App\Helpers\HelpersGenerales;
use App\Helpers\HelpersSessionLenguaje;

trait entidadesMetodosLenguajeAttributes{
    

    /**
     * Resuelve el texto a mostrar según este lenguaje y está propiedad.
     *
     * @param $Lenguaje = Session Lenguaje
     * @param $PropiedadName = El nombre de la prioridad
     */
    public function getPropiedadValorSegunLenguaje($Lenguaje,$PropiedadName,$FormateoTexto = true)
    {
      if($Lenguaje == 'ES')
      {
        $Lenguaje = '';
      }
      
      $Valor         = $this->$PropiedadName;
      $Propiedad     = $PropiedadName.$Lenguaje;

      if(isset($this->$Propiedad) &&  $this->$Propiedad != null && $this->$Propiedad != '')
      {
        $Valor = $this->$Propiedad;
      }

      if($FormateoTexto)
      {
        return $Valor;
      }

      return $Valor;      
    }



    /**
     * Es un atributo mutado que hace referencia al CTA de la entidad en los listados.
     */
    public function getCallToActionListaFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);
      if($Lenguaje == 'ES')
      {
        $Texto = 'Explorar el contenido';
      }
      elseif($Lenguaje == 'EN')
      {
        $Texto = 'Explore the content';
      }
      else
      {
        $Texto = 'Explorar el contenido';
      }

      return   $Texto ;
    }

    public function getLeerMasTextAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);
      if($Lenguaje == 'ES')
      {
        $Texto = 'Leer más';
      }
      elseif($Lenguaje == 'EN')
      {
        $Texto = 'Read more';
      }
      else
      {
        $Texto = 'Leer más';
      }

      return   $Texto ;
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

    public function getContenidoRenderAttribute()
    {        
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      $cadena   = $this->getPropiedadValorSegunLenguaje($Lenguaje, 'description',false);       

      return HelpersGenerales::helper_convertir_caractereres_entidades_blog_o_similares($cadena);    
    }
    
   

}    
<?php

namespace App\Traits;
use App\Helpers\HelpersGenerales;

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
        return ucfirst(strtolower($Valor));
      }

      return $Valor;
      
    }
   

}    
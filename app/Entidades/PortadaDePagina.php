<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\HelpersGenerales;
use Carbon\Carbon;
use App\Traits\entidadesMetodosComunes;
use App\Traits\entidadesMetodosLenguajeAttributes;
use App\Helpers\HelpersSessionLenguaje;

class PortadaDePagina extends Model
{

    use entidadesMetodosComunes;
    use entidadesMetodosLenguajeAttributes;

    protected $table            ='portada_de_paginas';    
    protected $fillable         = ['name', 'description'];
    protected $img_key          = 'portada_de_pagina_id';
    protected $route_admin_name = 'get_admin_portadas_de_paginas_editar';
    



    // A t r i b u t o s   m u t a d o s

    /**
     * Me da el nombre ya teniendo en cuenta el lenguaje que está en la sesión.
     */
    public function getTituloFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'titulo');  
    }

    public function getSubTituloFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'sub_titulo');  
    }

    public function getParrafoFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'parrafo');  
    }

    public function getLlamadoALaAccionFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'llamado_a_la_accion');  
    }
    
    

    
    

   

   
    
    
}
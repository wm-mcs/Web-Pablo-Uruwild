<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Traits\entidadesMetodosComunes;
use App\Traits\entidadesMetodosLenguajeAttributes;
use App\Helpers\HelpersSessionLenguaje;

class Texto extends Model
{

    use entidadesMetodosComunes;
    use entidadesMetodosLenguajeAttributes;

    protected $table            ='textos';    
    protected $fillable         = ['name', 'description'];
    protected $img_key          = 'texto_id';
    protected $route_admin_name = 'get_admin_textos_editar';
    





    public function getRouteAttribute()
    {  
       return '';
    }

    public function getTextoFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'texto');  
    }

   


   

    
    
}
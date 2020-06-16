<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\HelpersGenerales;
use App\Traits\entidadesMetodosComunes;




class Cabaña extends Model
{

    use entidadesMetodosComunes;

    protected $table              ='cabañas';    
    protected $fillable           = ['name'];
    protected $appends            = ['imagen_principal'];
    protected $route_admin_name   = 'get_admin_cabañas_editar';
    




    // A t r i b u t o s   m u t a d o s  
     public function getRouteAttribute()
     {        
        return url();
     }

    public function getContenidoRenderAttribute()
    { 

      $cadena = $this->description;

      return HelpersGenerales::helper_convertir_caractereres_entidades_blog_o_similares($cadena);
        
    }



    
   
    
}
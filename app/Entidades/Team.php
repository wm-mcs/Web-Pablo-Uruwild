<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Servicios\ServiciosDeEntidades;
use App\Helpers\HelpersGenerales;
use App\Traits\entidadesMetodosLenguajeAttributes;
use App\Helpers\HelpersSessionLenguaje;
use App\Traits\entidadesMetodosComunes;



class Team extends Model
{

  protected $table    = 'teams';
  protected $fillable = ['name', 'description'];
  protected $img_key  = 'team_id';

  use entidadesMetodosLenguajeAttributes;
  use entidadesMetodosComunes;   

  public function getRouteAdminAttribute()
  {        
    return route('get_admin_team_editar', $this->id);
  }

  public function getRouteAttribute()
  {        
    return url();
  }   

  public function getFacebookValorAttribute()
  {
    return HelpersGenerales::helper_dame_sino_es_null_o_vacio($this->facebook);
  }

  public function getYoutubeValorAttribute()
  {
    return HelpersGenerales::helper_dame_sino_es_null_o_vacio($this->youtube);
  }

  public function getInstagramValorAttribute()
  {
    return HelpersGenerales::helper_dame_sino_es_null_o_vacio($this->instagram);
  }

  public function getLinkedinValorAttribute()
  {
    return HelpersGenerales::helper_dame_sino_es_null_o_vacio($this->linkedin);
  }

  public function getWhatsappValorAttribute()
  {
    return HelpersGenerales::helper_dame_sino_es_null_o_vacio($this->whatsapp);
  }
     
  public function getCargoFormateadoConLenguajeAttribute()
  {
    $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

    return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'cargo');  
  } 

  public function getDescripcionFormateadoConLenguajeAttribute()
  {
    $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

    return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'description');  
  }

  public function getMostrarMenosTraducidoAttribute()
  {
    $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

    $Texto = 'Mostrar menos';

    if($Lenguaje == 'EN')
    {
       $Texto = 'Show less';
    }      

    return $Text;
  }

  public function getMostrarMasTraducidoAttribute()
  {
    $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

    $Texto = 'Mostrar más';
    
    if($Lenguaje == 'EN')
    {
       $Texto = 'Show more';
    }      

    return $Text;
  }



    
    
    
    
}
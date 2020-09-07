<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Servicios\ServiciosDeEntidades;
use App\Helpers\HelpersGenerales;
use App\Traits\entidadesMetodosLenguajeAttributes;
use App\Helpers\HelpersSessionLenguaje;




class Team extends Model
{

    protected $table ='teams';
    
    protected $fillable = ['name', 'description'];

    use entidadesMetodosLenguajeAttributes;



    // A t r i b u t o s   m u t a d o s

    public function getImagenesAttribute()
    {
        return ServiciosDeEntidades::getImagenes('team_id',$this->id);
    }

    public function getImagenPrincipalAttribute()
    {
        return ServiciosDeEntidades::getFotoPrincipal('team_id',$this->id);
    }

     public function getUrlImgFotoPrincipalAttribute()
     {  
        if($this->imagen_principal->count() > 0)
        {
          return $this->imagen_principal->url_img;
        }

        return url().'/imagenes/Helpers/imagen-no-disponible.png';
     }

     public function getUrlImgFotoPrincipalChicaAttribute()
     {
        if($this->imagen_principal->count() > 0)
        {
          return $this->imagen_principal->first()->url_img_chica;
        }
        
        return url().'/imagenes/Helpers/imagen-no-disponible.png';        
     }


     public function getRouteAdminAttribute()
     {        
        return route('get_admin_team_editar', $this->id);
     }

     public function getRouteAttribute()
     {        
        return url();
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
        $query->where('borrado', "no");                 
    }

    public function getFirstNameAttribute()
    {
        $name = explode(" ", $this->name);
      
        return $name[0];
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

    public function getDescripcionBreveFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'descripcion_breve');  
    }

    public function getDescripcionFormateadoConLenguajeAttribute()
    {
      $Lenguaje = HelpersSessionLenguaje::getAndPutSessionLenguaje(null,null);

      return $this->getPropiedadValorSegunLenguaje($Lenguaje, 'descripcion');  
    }



    
    
    
    
}
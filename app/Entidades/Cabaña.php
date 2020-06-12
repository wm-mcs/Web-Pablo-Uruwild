<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Servicios\ServiciosDeEntidades;
use App\Helpers\HelpersGenerales;




class Cabaña extends Model
{

    protected $table    ='cabañas';    
    protected $fillable = ['name'];
    protected $appends  = ['imagen_principal'];




    // A t r i b u t o s   m u t a d o s

    public function getImagenesAttribute()
    {
        return ServiciosDeEntidades::getImagenes('cabaña_id',$this->id);
    }

    public function getImagenPrincipalAttribute()
    {
        return ServiciosDeEntidades::getFotoPrincipal('cabaña_id',$this->id);
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
        return route('get_admin_cabañas_editar', $this->id);
     }

     public function getRouteAttribute()
     {        
        return url();
     }

    public function getContenidoRenderAttribute()
    { 

      $cadena = $this->description;

      return HelpersGenerales::helper_convertir_caractereres_entidades_blog_o_similares($cadena);
        
    }



    //  S c o p e s ///////////////////////

    public function scopeName($query, $name)
    {
        
        if (trim($name) !="")
        {                        
           $query->where('name', "LIKE","%$name%"); 
        }
        
    }
   
    
}
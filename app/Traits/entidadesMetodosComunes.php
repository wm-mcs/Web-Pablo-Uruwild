<?php

namespace App\Traits;
use App\Servicios\ServiciosDeEntidades;
use App\Helpers\HelpersGenerales;

trait entidadesMetodosComunes{
    

    public function getImagenesAttribute()
    {
        return ServiciosDeEntidades::getImagenes($this->img_key,$this->id);
    }

    public function getImagenPrincipalAttribute()
    {
        return ServiciosDeEntidades::getFotoPrincipal($this->img_key,$this->id);
    }

     public function getUrlImgFotoPrincipalAttribute()
     {  
        if($this->imagen_principal->count() > 0)
        {
         return $this->imagen_principal->first()->url_img;
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

        if(isset($this->route_admin_name))
        {
          return route($this->route_admin_name,$this->id);
        }
        else
        {
          return null;
        }
        
     }

     




    /* S c o p e s */

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
    }

}    
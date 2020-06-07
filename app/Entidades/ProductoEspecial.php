<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Servicios\ServiciosDeEntidades;


class ProductoEspecial extends Model
{

    protected $table ='productos_especiales';

    
    protected $fillable = ['name', 'description'];
    protected $img_key  = 'producto_especial_id';



    // A t r i b u t o s   m u t a d o s

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



    

    public function getRouteAdminAttribute()
    {
        return route('get_admin_actividades_editar',$this->id);
    }
    
    
}
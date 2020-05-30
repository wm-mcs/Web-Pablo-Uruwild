<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Servicios\ServiciosDeEntidades;




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
        return $this->imagen_principal->url_img;
     }

     public function getUrlImgFotoPrincipalChicaAttribute()
     {dd($this->imagen_principal->url_img_chica);
        return $this->imagen_principal->url_img_chica;
     }


     public function getRouteAdminAttribute()
     {        
        return route('get_admin_cabañas_editar', $this->id);
     }

     public function getRouteAttribute()
     {        
        return url();
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
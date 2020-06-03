<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\HelpersGenerales;




class Imagen extends Model
{

    protected $table    ='imagenes';
    protected $fillable = ['name'];
    protected $appends  = ['url_img','url_img_chica','path_url_img','path_url_img_chica'];

    
    public function getUrlImgAttribute()
    {
        
        return url().'/imagenes/'. $this->path . HelpersGenerales::helper_convertir_cadena_para_url($this->name) . '-'.$this->id . '.jpg';
    }


    public function getUrlImgChicaAttribute()
    {
        
        return url().'/imagenes/'. $this->path . HelpersGenerales::helper_convertir_cadena_para_url($this->name) . '-'.$this->id . '-chica.jpg';
    }


    public function getPathUrlImgAttribute()
    {
        
        return public_path().'/imagenes/'. $this->path . HelpersGenerales::helper_convertir_cadena_para_url($this->name) . '-'.$this->id . '.jpg';
    }


    public function getPathUrlImgChicaAttribute()
    {
        
        return public_path().'/imagenes/'. $this->path . HelpersGenerales::helper_convertir_cadena_para_url($this->name) . '-'.$this->id . '-chica.jpg';
    }


    


    public function getEsImagenPrincipalAttribute()
    {
        if($this->foto_principal == 'si')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getEliminarRouteAttribute()
    {
        return route('borrar_esta_imagen',$this->id);
    }

    public function getCambiarAPricnipalRouteAttribute()
    {
        return route('establecer_como_principal',$this->id);
    }
    
}

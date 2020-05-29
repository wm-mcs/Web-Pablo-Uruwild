<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;




class Imagen extends Model
{

    protected $table    ='imagenes';

    protected $fillable = ['name'];

    
    public function getUrlImgAttribute()
    {
        
        return url().'/imagenes/'.$this->name;
    }
    
}

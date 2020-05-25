<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;




class ProductoImg extends Model
{

    protected $table ='producto_imagenes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    
    public function getUrlImgAttribute()
    {
        
        return url().'/imagenes/'.$this->img;
    }
    
}
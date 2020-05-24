<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;





class ImgTrayectoria extends Model
{

    protected $table ='imgs_trayectoria';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

   

    
    public function getUrlImgAttribute()
    {
        
        return url().'/imagenes/Trayectoria/'.$this->img . '.jpg';
    }
    
}
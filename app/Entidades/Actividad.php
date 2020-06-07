<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;


class Actividad extends Model
{

    protected $table ='actividades';

    
    protected $fillable = ['name', 'description'];






   
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
        return '';

    }
    
    
}
<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;




class Cabaña extends Model
{

    protected $table ='cabañas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    
   
    
}
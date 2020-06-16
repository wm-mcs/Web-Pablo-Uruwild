<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Traits\entidadesMetodosComunes;


class Actividad extends Model
{


    use entidadesMetodosComunes;

    protected $table              ='actividades';    
    protected $fillable           = ['name', 'description'];
    protected $img_key            = 'actividad_id';
    protected $route_admin_name   = 'get_admin_actividades_editar';



    // A t r i b u t o s   m u t a d o s



   




    

    public function getRouteAdminAttribute()
    {
        return route('get_admin_actividades_editar',$this->id);
    }
    
    
}
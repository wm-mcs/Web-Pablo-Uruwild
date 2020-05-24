<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use App\Entidades\ImgTrayectoria;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;




class Trayectoria extends Model
{

    protected $table ='trayectoria';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];



    public function imagenestrayectoria()
    {
      return $this->hasMany(ImgTrayectoria::class,'trayectoria_id','id')->where('estado','si');
    }


     public function getImagenesDeTrayectoriaAttribute()
     {
        return Cache::remember('ImagenesTrayectoria'.$this->id, 600, function() {
                              return $this->imagenestrayectoria; 
                          });    
     }





    /**
     * PAra busqueda por nombre
     */
    public function scopeName($query, $name)
    {
        //si el paramatre(campo busqueda) esta vacio ejecutamos el codigo
        /// trim() se utiliza para eliminar los espacios.
        ////Like se usa para busqueda incompletas
        /////%% es para los espacios adelante y atras
        if (trim($name) !="")
        {                        
           $query->where('name', "LIKE","%$name%"); 
        }
        
    }

    public function scopeActive($query)
    {
                               
           $query->where('estado', "si"); 
                
    }


    public function getUrlImgAttribute()
    {
        
        return url().'/imagenes/'.$this->img;
    }

    public function getRouteAdminAttribute()
    {
     return route('get_admin_trayectoria_editar', $this->id);
    }



    public function getFechaInicioPersonalizadaAttribute()
    {
        $fecha = Carbon::parse($this->fecha_inicio);

        return $fecha/*->format('d/m/Y')*/;
    }

    public function getFechaFinPersonalizadaAttribute()
    {
        $fecha = Carbon::parse($this->fecha_fin);

        return $fecha/*->format('d/m/Y')*/;
    }

     public function getFechaInicioPersonalizadaFormateadaAttribute()
    {
        $fecha = Carbon::parse($this->fecha_inicio);

        return $fecha->format('d-m-Y');
    }

    public function getFechaFinPersonalizadaFormateadaAttribute()
    {
        $fecha = Carbon::parse($this->fecha_fin);

        return $fecha->format('d-m-Y');
    }


    public function getSeTerminoFechaAttribute()
    {
        if($this->hasta_hoy == 'si')
        {
            return "Actualidad";
        }
        else
        {
            return $this->fecha_fin_personalizada_formateada;
        }
    }



   

    

    
}
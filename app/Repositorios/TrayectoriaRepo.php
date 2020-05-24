<?php 

namespace App\Repositorios;

use App\Entidades\Trayectoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class TrayectoriaRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Trayectoria();
  }


    public function getFechaInicioPersonalizadaAttribute()
    {
        $fecha = Carbon::parse($this->created_at);

        return $fecha->format('d/m/Y');
    }


    public function getTrayectoriasOrdenedasPorFecha()
    {
      return $this->getEntidad()
                  ->where('estado','si')
                  ->orderBy('fecha_inicio', 'asc')
                  ->get();
    } 



    public function getTrayectoriaSegunTipoOrdenadas($tipo)
    {
      return  $this->getEntidad()
                  ->where('estado','si')
                  ->where('tipo',$tipo)
                  ->orderBy('fecha_inicio', 'asc')
                  ->get();
    }







 


  
}
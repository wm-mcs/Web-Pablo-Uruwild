<?php 

namespace App\Repositorios;

use App\Entidades\Imagen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class ImagenRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Imagen();
  }


 public function setUnaImagenEnBaseDeDatos($name,$path,$Nombre_del_campo_id,$Valor_id)
 {
  $Entidad = $this->getEntidad();
  $Entidad->name = $name;
  $Entidad->path = $path;
  $Entidad->$Nombre_del_campo_id = $Valor_id;
  $Entidad->save();

  return $Entidad;


 }


  
}
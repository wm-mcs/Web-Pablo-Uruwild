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



 // G e t t e r s 
 public function getImagenes($nombre_del_campo,$valor_id)
 {
   return $this->getEntidad()
               ->where($nombre_del_campo,$valor_id)
               ->orderBy('foto_principal','asc')
               ->get();
 } 

 // S e t t e r s
 public function setUnaImagenEnBaseDeDatos($name,$path,$Nombre_del_campo_id,$Valor_id)
 {
    $Entidad = $this->getEntidad();
    $Entidad->name = $name;
    $Entidad->path = $path;
    $Entidad->$Nombre_del_campo_id = $Valor_id;
    $Entidad->save();
    return $Entidad;
 }


  public function poner_esta_imagen_como_principal($id_img,$nombre_del_campo)
  {
    // L a   i m a g e n   q u e   q u i e r o   p o n e r   c o m o   p r i n c i p a l 
    $imagen = $this->find($id_img);

    $imagen_pricipal_actual = $this->get_imagen_principal_de_entidad_especifica($nombre_del_campo,$imagen->$nombre_del_campo);  

    if($imagen_pricipal_actual->count() > 0)
    {
      $imagen_pricipal_actual = $imagen_pricipal_actual->first();
      $imagen_pricipal_actual->foto_principal = null;
      $imagen_pricipal_actual->save();
    }

    $imagen->foto_principal = 'si';
    $imagen->save();
    
  }


  
}
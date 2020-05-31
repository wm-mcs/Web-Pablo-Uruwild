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
    $imagen = $this->find($id_img);

    $imagen_pricipal = $this->get_imagen_principal_de_entidad_especifica($nombre_del_campo,$imagen->$nombre_del_campo) ;  

    $this->cambio_a_imagen_principal_desde_base_repo($imagen_pricipal,$imagen);
  }


  
}
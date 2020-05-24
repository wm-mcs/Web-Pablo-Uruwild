<?php 

namespace App\Repositorios;

use App\Entidades\ImgTrayectoria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class ImgTrayectoriaRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new ImgTrayectoria();
  }


 

    public function setImgTrayectoria($Trayectoria)
    {
      $Img                 = $this->getEntidad();
      $Img->trayectoria_id = $Trayectoria->id;
      $Img->estado         = 'si'; 
      $Img->save();

      $Img->img            = $this->HelperPrepararStringParaUrl($Trayectoria->name) . $Img->id ;
      $Img->save();

      return $Img;
    }
  
}
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


 


  
}
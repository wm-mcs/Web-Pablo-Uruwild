<?php 

namespace App\Repositorios;

use App\Entidades\Cabaña;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class CabañaRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Cabaña();
  }



  


 


  
}
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



  public function getCabañasParaHome()
  {
    return $this->getEntidad()
                    ->where('estado','si')
                    ->where('borrado','no')
                    ->orderBy('rank', 'desc')
                    ->get();

  }


 


  
}
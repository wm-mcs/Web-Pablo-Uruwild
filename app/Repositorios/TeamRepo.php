<?php 

namespace App\Repositorios;

use App\Entidades\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class TeamRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Team();
  }

  //guetters/////////////////////////////////////////////////////////////////////

 


  
}

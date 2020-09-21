<?php 

namespace App\Repositorios;
use App\Entidades\Texto;


class TextoRepo extends BaseRepo
{  
  public function getEntidad()
  {
    return new Texto();
  }

 

 


  
}
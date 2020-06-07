<?php 

namespace App\Repositorios;
use App\Entidades\Tour;



class TourRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Tour();
  }



 
  

  
}
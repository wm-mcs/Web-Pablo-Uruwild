<?php 

namespace App\Repositorios;
use App\Entidades\ProductoEspecial;



class ProductoEspecialRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new ProductoEspecial();
  }



 
  

  
}
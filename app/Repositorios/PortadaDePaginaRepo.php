<?php 

namespace App\Repositorios;
use App\Entidades\PortadaDePagina;

class PortadaDePaginaRepo extends BaseRepo
{
  
  public function getEntidad()
  {
     return new PortadaDePagina();
  }

    

  
}
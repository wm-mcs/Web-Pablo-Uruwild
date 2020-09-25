<?php 

namespace App\Repositorios;
use App\Entidades\Texto;


class TextoRepo extends BaseRepo
{  
  public function getEntidad()
  {
    return new Texto();
  }


  /**
   * Los textos de esa pagina mas los testos generales del footer y header
   */
  public function getTextosDeSeccion($pagina)
  {
    return $this->getEntidad()
                ->where('borrado','no')
                ->active()
                ->where(function($q) use ($pagina)
                   {       
                    $generales = 'generales';           
                    $q->where('pagina', "LIKE","%".trim($generales)."%"); 
                    $q->orWhere('pagina', "LIKE","%".trim($pagina)."%");
                 })->get();
  }               
}
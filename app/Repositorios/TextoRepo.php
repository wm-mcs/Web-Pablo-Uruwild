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
                    $q->where('pagina', "LIKE","%".trim($pagina)."%");
                    $q->orWhere('pagina', "LIKE","%".trim('footer')."%"); 
                    $q->orWhere('pagina', "LIKE","%".trim('header')."%");  
                    $q->orWhere('pagina', "LIKE","%".trim('contacto')."%");                       
                    $q->orWhere('pagina', "LIKE","%".trim('nav')."%");                    
                    
                 })->get();
  }               
}
<?php 

namespace App\Repositorios;
use App\Entidades\Tour;



class TourRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Tour();
  }


  public function getEntidadesDeToursPaginadas($request,$paginada,$tipo_de_tour,$orderBy = 'id', $vañor = 'desc' )
  {
    return $this->entidad
                ->active() 
                ->where('tipo_de_tour',$tipo_de_tour)
                ->name($request->get('name'))                               
                ->orderBy($orderBy,$vañor)
                ->paginate($paginada);
  }



 
  

  
}
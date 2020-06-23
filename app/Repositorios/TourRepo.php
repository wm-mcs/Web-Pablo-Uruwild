<?php 

namespace App\Repositorios;
use App\Entidades\Tour;



class TourRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Tour();
  }


  public function getEntidadesParaHomeTour($Cantidad,$Order_key, $Order_value = 'desc',$tipo_de_tour)
  {
   $Entidades = $this->entidad
                     ->where('tipo_de_tour',$tipo_de_tour)
                     ->where('estado','si')
                     ->where('borrado','no')
                     ->orderBy($Order_key,$Order_value)
                     ->get();

   if($Entidades->count() >= $Cantidad )   
   {
    return $Entidades->take($Cantidad);
   }  

    return   $Entidades;           
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
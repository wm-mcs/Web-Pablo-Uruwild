<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\TourRepo;
use App\Repositorios\ImagenRepo;
use App\Helpers\HelpersGenerales;
use App\Managers\tour_manager;
use App\Interfaces\entidadCrudControllerInterface;
use App\Traits\entidadesControllerComunesCrud;




class Admin_Tours_Controllers extends Controller implements entidadCrudControllerInterface
{


  use entidadesControllerComunesCrud;

  protected $Entidad_principal;
  protected $Nombre_entidad_plural      ;
  protected $Nombre_entidad_singular    ;
  protected $Carpeta_view_admin         ; 
  protected $Path_view_get_admin_index  ;
  protected $Path_view_get_admin_crear  ;
  protected $Path_view_get_admin_editar ;
  protected $Route_index ;               
  protected $Route_crear  ;             
  protected $Route_crear_post ;          
  protected $Route_editar_post ;         
  protected $Route_luego_de_crear;       
  protected $Path_carpeta_imagenes;      
  protected $Nombre_del_campo_imagen;    

  

  public function __construct(TourRepo   $TourRepo,
                              ImagenRepo $ImagenRepo )
  {
    $this->Entidad_principal          = $TourRepo;
    $this->ImagenRepo                 = $ImagenRepo;
    $this->Nombre_entidad_plural      = 'Tours';
    $this->Nombre_entidad_singular    = 'Tour';
    $this->Carpeta_view_admin         = strtolower(str_replace(' ','_', $this->Nombre_entidad_plural));
    $this->Path_view_get_admin_index  = 'admin.' . $this->Carpeta_view_admin . '.home';
    $this->Path_view_get_admin_crear  = 'admin.' . $this->Carpeta_view_admin . '.crear';
    $this->Path_view_get_admin_editar = 'admin.' . $this->Carpeta_view_admin . '.editar';
    $this->Route_index                = 'get_admin_'. $this->Carpeta_view_admin .'';
    $this->Route_crear                = 'get_admin_'. $this->Carpeta_view_admin .'_crear';
    $this->Route_crear_post           = 'set_admin_'. $this->Carpeta_view_admin .'_crear';
    $this->Route_editar_post          = 'set_admin_'. $this->Carpeta_view_admin .'_editar';
    $this->Route_luego_de_crear       = $this->Route_index;
    $this->Path_carpeta_imagenes      = $this->Carpeta_view_admin .'/'; //donde se gurarda la imagen. Debe existir
    $this->Nombre_del_campo_imagen    = strtolower($this->Nombre_entidad_singular) . '_id';
    
  }

  public function getPropiedades()
  {
    return ['name','fecha_inicio','cantidad_de_dias','description','descripcion_breve','precio','estado'];
  }

  public function getManager($Request)
  {
    $manager = new tour_manager(null, $Request->all());

    return $manager;
  }


  public function get_admin(Request $Request)
  { 
    $Entidades           = $this->Entidad_principal->getEntidadesDeToursPaginadas($Request,9,'tour','id','desc');
    $Titulo              = $this->Nombre_entidad_plural;
    $Route_crear         = $this->Route_crear;
    $Route_busqueda      = $this->Route_index;
    $Carpeta_view_admin  = $this->Carpeta_view_admin;

    return view($this->Path_view_get_admin_index, compact('Entidades','Route_crear','Titulo','Route_busqueda','Carpeta_view_admin'));
  }




  
  

  
  

  
}
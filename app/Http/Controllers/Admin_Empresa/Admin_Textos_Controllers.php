<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\TextoRepo;
use App\Repositorios\ImagenRepo;
use App\Helpers\HelpersGenerales;
use App\Managers\texto_manager;
use App\Interfaces\entidadCrudControllerInterface;
use App\Traits\entidadesControllerComunesCrud;




class Admin_Textos_Controllers extends Controller implements entidadCrudControllerInterface
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

  

  public function __construct(TextoRepo  $TextoRepo,
                              ImagenRepo $ImagenRepo )
  {
    $this->Entidad_principal          = $TextoRepo;
    $this->ImagenRepo                 = $ImagenRepo;
    $this->Nombre_entidad_plural      = 'Textos';
    $this->Nombre_entidad_singular    = 'Texto';
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
    return ['pagina','name','texto','textoEN'];
  }

  public function getManager($Request)
  {
    $manager = new texto_manager(null, $Request->all());

    return $manager;
  }

  public function getImagenMiniaturaSize()
  {
    return 1000;
  }

  /**
   * olvida los cache que ponga aquí
   *
   * @return void
   */
  public function olvidarCachesAsociadoAEstaEntidad()
  {
          
  }



  




  
  

  
  

  
}
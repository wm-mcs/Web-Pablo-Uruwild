<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\CabañaRepo;
use App\Repositorios\ImagenRepo;




class Admin_Cabaña_Controllers extends Controller
{

  protected $CabañaRepo;
  protected $ImagenRepo;

  public function __construct(CabañaRepo  $CabañaRepo,
                              ImagenRepo  $ImagenRepo )
  {
    $this->CabañaRepo    = $CabañaRepo;
    $this->ImagenRepo    = $ImagenRepo;
  }

  public function getPropiedades()
  {
    return ['name','descripcion_breve','ubicacion','description','cantidad_maxima_de_personas','estado','rank'];
  }

  //home admin User
  public function get_admin_cabañas(Request $Request)
  { 
    $Entidades = $this->CabañaRepo->getEntidadesAllPaginadas( $Request,10);

    return view('admin.cabañas.cabañas_home', compact('Entidades'));
  }

  //get Crear admin User
  public function get_admin_cabañas_crear()
  {  
    return view('admin.cabañas.cabañas_crear');
  }

  //set Crear admin User
  public function set_admin_cabañas_crear(Request $Request)
  {     

      //propiedades para crear
      $Propiedades = $this->getPropiedades();

      //traigo la entidad
      $Entidad = $this->CabañaRepo->getEntidad();

      //grabo todo las propiedades
      $this->CabañaRepo->setEntidadDato($Entidad,$Request,$Propiedades);   

/*
      if($Request->hasFile('img'))
      {
        

        //para la imagen
        $this->ImagenRepo->setImagen(null,$Request,'img','Trayectoria/', $TrayectoriaImg->img,'.jpg'); 
      }   */
      

     return redirect()->route('get_admin_cabañas')->with('alert', 'Trayectoria creada correctamente');
    
  }

  //get edit admin marca
  public function get_admin_cabañas_editar($id)
  {
    $Entidad = $this->CabañaRepo->find($id);

    return view('admin.cabañas.cabañas_editar',compact('Entidad'));
  }

  //set edit admin marca
  public function set_admin_cabañas_editar($id,Request $Request)
  {
    $Entidad = $this->CabañaRepo->find($id);    

    //propiedades para crear
    $Propiedades = $this->getPropiedades();

    //grabo todo las propiedades
    $this->CabañaRepo->setEntidadDato($Entidad,$Request,$Propiedades);

    /*
      if($Request->hasFile('img'))
      {
        

        
        $this->ImagenRepo->setImagen(null,$Request,'img','Trayectoria/', $TrayectoriaImg->img,'.jpg'); 
      }   */

    return redirect()->back()->with('alert', 'Trayectoria Editado Correctamente');  
  }

  
}
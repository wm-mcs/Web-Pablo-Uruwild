<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Repositorios\TrayectoriaRepo;
use Illuminate\Http\Request;
use App\Repositorios\ImgTrayectoriaRepo;




class Admin_Trayectorias_Controllers extends Controller
{

  protected $TrayectoriaRepo;
  protected $ImgTrayectoriaRepo;

  public function __construct(TrayectoriaRepo     $TrayectoriaRepo,
                              ImgTrayectoriaRepo  $ImgTrayectoriaRepo )
  {
    $this->TrayectoriaRepo    = $TrayectoriaRepo;
    $this->ImgTrayectoriaRepo = $ImgTrayectoriaRepo;
  }

  //home admin User
  public function get_admin_trayectorias(Request $Request)
  { 
    $Trayectorias = $this->TrayectoriaRepo->getTrayectoriasOrdenedasPorFecha();
    return view('admin.trayectoria.trayectoria_home', compact('Trayectorias'));
  }

  //get Crear admin User
  public function get_admin_trayectoria_crear()
  {  
    return view('admin.trayectoria.trayectoria_crear');
  }

  //set Crear admin User
  public function set_admin_trayectoria_crear(Request $Request)
  {     

      //propiedades para crear
      $Propiedades = ['name','description','estado','fecha_inicio','fecha_fin','hasta_hoy','tipo','link'];

      //traigo la entidad
      $Trayectoria = $this->TrayectoriaRepo->getEntidad();

      //grabo todo las propiedades
      $this->TrayectoriaRepo->setEntidadDato($Trayectoria,$Request,$Propiedades);   


      if($Request->hasFile('img'))
      {
        $TrayectoriaImg = $this->ImgTrayectoriaRepo->setImgTrayectoria($Trayectoria);

        //para la imagen
        $this->ImgTrayectoriaRepo->setImagen(null,$Request,'img','Trayectoria/', $TrayectoriaImg->img,'.jpg'); 
      }   
      

     return redirect()->route('get_admin_trayectorias')->with('alert', 'Trayectoria creada correctamente');
    
  }

  //get edit admin marca
  public function get_admin_trayectoria_editar($id)
  {
    $Trayectoria = $this->TrayectoriaRepo->find($id);

    return view('admin.trayectoria.trayectoria_editar',compact('Trayectoria'));
  }

  //set edit admin marca
  public function set_admin_trayectoria_editar($id,Request $Request)
  {
    $Trayectoria = $this->TrayectoriaRepo->find($id);    

    //propiedades para crear
    $Propiedades = ['name','description','estado','fecha_inicio','fecha_fin','hasta_hoy','tipo','link'];  

    //grabo todo las propiedades
    $this->TrayectoriaRepo->setEntidadDato($Trayectoria,$Request,$Propiedades);

    
      if($Request->hasFile('img'))
      {
        $TrayectoriaImg = $this->ImgTrayectoriaRepo->setImgTrayectoria($Trayectoria);

        //para la imagen
        $this->ImgTrayectoriaRepo->setImagen(null,$Request,'img','Trayectoria/', $TrayectoriaImg->img,'.jpg'); 
      }   

    return redirect()->back()->with('alert', 'Trayectoria Editado Correctamente');  
  }

  
}
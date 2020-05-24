<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Helpers\HelpersGenerales;



class Admin_Datos_Corporativos_Controller extends Controller
{

  protected $Empresa;

  public function __construct(EmpresaRepo $EmpresaRepo)
  {
    $this->Empresa = $EmpresaRepo;
  }

  public function get_datos_corporativos()
  {

    $Empresa = $this->Empresa->getEmpresaDatos();

    return view('admin.empresa.empresa_home', compact('Empresa'));
  }

  public function set_datos_corporativos(Request $Request)
  {
     

    $Empresa = $this->Empresa->getEmpresaDatos();

      $Propiedades = ['name','slogan','vision','mision','telefono','direccion','horarios_dias','celular','email','email_no_reply','palabras_claves','descripcion_breve','facebook_url','instagram_url','twitter_url','linkedin_url','youtube_url','Whatsapp_cel','home_titulo','home_subtitulo','home_sobre_mi','home_sobre_mi_2','home_footer_sobre_mi'];  
    
      $this->Empresa->setEntidadDato($Empresa,$Request,$Propiedades);
       

      $this->Empresa->setImagen(null,$Request,'logo_cuadrado','Empresa/','logo_cuadrado','.png');
      $this->Empresa->setImagen(null,$Request,'logo_horizontal','Empresa/','logo_horizontal','.png');
      $this->Empresa->setImagen(null,$Request,'logo_vertical','Empresa/','logo_vertical','.png');
      $this->Empresa->setImagen(null,$Request,'home_imagen_portada','Empresa/','home_imagen_portada','.jpg');
      $this->Empresa->setImagen(null,$Request,'home_imagen_quien_soy','Empresa/','home_imagen_queien_soy','.jpg',1000);
      $this->Empresa->setImagen(null,$Request,'home_imagen_quien_soy2','Empresa/','home_imagen_queien_soy2','.jpg',1000);
      $this->Empresa->setImagen(null,$Request,'imagen_contacto','Empresa/','atencion','.jpg',300);

      $Empresa->save();  
      HelpersGenerales::helper_olvidar_este_cache('EmpresaDatos');
 
    return redirect()->back()->with('alert', 'has actualizado la información de manera correcta');
  }


  //para editar el curriculumn vitae
  public function get_cv()
  {
    $Empresa = $this->Empresa->getEmpresaDatos();

    return view('admin.cv.cv_editar', compact('Empresa'));
  }

  public function patch_cv(Request $Request)
  {
    $Empresa = $this->Empresa->getEmpresaDatos(); 

    $this->Empresa->setAtributoEspecifico($Empresa,'cv_text',$Request->get('cv_text'));

    $this->Empresa->setImagen( null, $Request,'img1','Cv/',str_replace(' ' ,'-', $Empresa->name ).'-cv-1','.jpg');
    $this->Empresa->setImagen( null, $Request,'img2','Cv/',str_replace(' ' ,'-', $Empresa->name ).'-cv-2','.jpg');
    $this->Empresa->setImagen( null, $Request,'img3','Cv/',str_replace(' ' ,'-', $Empresa->name ).'-cv-3','.jpg');
    $this->Empresa->setImagen( null, $Request,'img4','Cv/',str_replace(' ' ,'-', $Empresa->name ).'-cv-4','.jpg');    

    return redirect()->back()->with('alert','Editado correctamente');
  }
}
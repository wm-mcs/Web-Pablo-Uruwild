<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\ImagenRepo;
use App\Helpers\HelpersGenerales;




class Admin_Imagen_Controllers extends Controller
{


  
  protected $ImagenRepo;

  public function __construct(ImagenRepo  $ImagenRepo )
  {
    
    $this->ImagenRepo    = $ImagenRepo;
  }

  // B o r r a   e s t a   i m a g e n  y  a j u s t a  c a c h e
  public function borrar_esta_imagen($id,$nombre_campo)
  {

  	

  	$Imagen = $this->ImagenRepo->find($id); 

  	if(!is_null($Imagen))
  	{  	
	  	if(file_exists($Imagen->path_url_img))
	  	{
	  		unlink($Imagen->path_url_img);
	  	}

	  	if(file_exists($Imagen->path_url_img_chica))
	  	{
	  		unlink($Imagen->path_url_img_chica);
	  	}

	  	$this->ImagenRepo->destruir_esta_entidad($Imagen);

	  	
	  	HelpersGenerales::helper_olvidar_este_cache('Imagenes'.$nombre_campo.$Imagen->$nombre_campo);
	  	HelpersGenerales::helper_olvidar_este_cache('ImagenPrincipal'.$nombre_campo.$Imagen->$nombre_campo);
	  	return redirect()->back()->with('alert', 'Se borró la imagen correctamente.'); 
  	}
  	else
  	{
  		return redirect()->back()->with('alert', 'La imagen ya se había borrado'); 
  	}
  	

  }

  // P o n e   e s t á  i m a g e n  c ó m o   p r i n c i p a l
  public function establecer_como_principal($id,$nombre_campo)
  {

    $Imagen = $this->ImagenRepo->find($id); 
  	HelpersGenerales::helper_olvidar_este_cache('Imagenes'.$nombre_campo.$Imagen->$nombre_campo);
    HelpersGenerales::helper_olvidar_este_cache('ImagenPrincipal'.$nombre_campo.$Imagen->$nombre_campo);
  	$this->ImagenRepo->poner_esta_imagen_como_principal($id,$nombre_campo);

  	return redirect()->back()->with('alert', 'Se cambió la imagen principal con éxito.'); 
  }



}
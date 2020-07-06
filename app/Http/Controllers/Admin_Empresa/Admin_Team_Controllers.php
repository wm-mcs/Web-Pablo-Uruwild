<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\ImagenRepo;
use App\Repositorios\TeamRepo;
use App\Managers\team_manager;
use App\Helpers\HelpersGenerales;




class Admin_Team_Controllers extends Controller
{

  protected $TeamRepo;
  protected $ImagenRepo;

  public function __construct(TeamRepo     $TeamRepo,
                              ImagenRepo   $ImagenRepo )
  {
    $this->TeamRepo    = $TeamRepo;
    $this->ImagenRepo  = $ImagenRepo;
  }


  public function getPropiedades()
  {
    return ['name','cargo','celular','email','facebook','instagram','youtube','linkedin','whatsapp','descripcion_breve','description','estado'];
  }

  
  public function get_admin_teams(Request $Request)
  { 
    $Entidades = $this->TeamRepo->getEntidadActivas();
    return view('admin.team.team_home', compact('Entidades'));
  }

  
  public function get_admin_team_crear()
  {  
    return view('admin.team.team_crear');
  }


  public function olvidarCachesAsociadoAEstaEntidad()
  {
      HelpersGenerales::helper_olvidar_este_cache('Teams');
      HelpersGenerales::helper_olvidar_este_cache('TeamsQuienes');      
  }

  
  public function set_admin_team_crear(Request $Request)
  {     

      
      $Propiedades = $this->getPropiedades();
      
      $Entidad = $this->TeamRepo->getEntidad();

      $manager = new team_manager(  null, $Request->all());

      if(!$manager->isValid())
      {
         return redirect()->back()->withErrors($manager->getErrors())->withInput($manager->getData());
      }
      
      $this->TeamRepo->setEntidadDato($Entidad,$Request,$Propiedades);   

      // S i  e l  a r r a y   d e   i m á g e n e s   n o   e s t á   v a c i o   
      $files = $Request->file('img');      
      
      if($files[0] != null )
      {   
        foreach($files as $file)
        { 

          // C r e o   l a   i m a g e n   e n   l a   b a s e   d e   d a t o s 
          $Imagen = $this->ImagenRepo->setUnaImagenEnBaseDeDatos($Entidad->name, 'Team/', 'team_id', $Entidad->id);

          // G u a r d o   l a   i m a g e n   f í s i c a   e n   e l   s i s t e m a   d e   a r c h i v o s 
          $Nombre_de_la_imagen = HelpersGenerales::helper_convertir_cadena_para_url($Imagen->name).'-'.$Imagen->id;

            // I m a g e n   g r a n d e 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen,'.jpg');

            // I m a g e n   c h i c a 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen.'-chica','.jpg',400);

        }

        // M a r c o   u n a   i m a g e n   c o  m o   p r i n c i p a l
        $Imagen = $this->ImagenRepo->getImagenes('team_id',$Entidad->id)->first();
        $this->ImagenRepo->setAtributoEspecifico($Imagen,'foto_principal','si'); 

        
      }     

      $this->olvidarCachesAsociadoAEstaEntidad();

      return redirect()->route('get_admin_teams')->with('alert', 'Se creó correctamente. En breve se verá reflejado en los listados de la interfas pública');

     

      

    
  }

  //get edit admin marca
  public function get_admin_team_editar($id)
  {
    $Entidad = $this->TeamRepo->find($id);

    return view('admin.team.team_editar',compact('Entidad'));
  }

  //set edit admin marca
  public function set_admin_team_editar($id,Request $Request)
  {
    $Entidad = $this->TeamRepo->find($id);    

    //propiedades para crear
    $Propiedades = $this->getPropiedades();  

    //grabo todo las propiedades
    $this->TeamRepo->setEntidadDato($Entidad,$Request,$Propiedades);   
      

      // S i  e l  a r r a y   d e   i m á g e n e s   n o   e s t á   v a c i o   
      $files = $Request->file('img');      
      
      if($files[0] != null )
      {   
        foreach($files as $file)
        { 

          // C r e o   l a   i m a g e n   e n   l a   b a s e   d e   d a t o s 
          $Imagen = $this->ImagenRepo->setUnaImagenEnBaseDeDatos($Entidad->name, 'Team/', 'team_id', $Entidad->id);

          // G u a r d o   l a   i m a g e n   f í s i c a   e n   e l   s i s t e m a   d e   a r c h i v o s 
          $Nombre_de_la_imagen = HelpersGenerales::helper_convertir_cadena_para_url($Imagen->name).'-'.$Imagen->id;

            // I m a g e n   g r a n d e 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen,'.jpg');

            // I m a g e n   c h i c a 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen.'-chica','.jpg',400);

        }

        // Ajusto los cache
            $nombre_campo = 'team_id';

        HelpersGenerales::helper_olvidar_este_cache('Imagenes'.$nombre_campo.$Entidad->id);
        HelpersGenerales::helper_olvidar_este_cache('ImagenPrincipal'.$nombre_campo.$Entidad->id);
        
      }      

      $this->olvidarCachesAsociadoAEstaEntidad();

      return redirect()->back()->with('alert','Se editó correctamente. En breve lo verás reflejado en la interfás pública');
  }

  
}
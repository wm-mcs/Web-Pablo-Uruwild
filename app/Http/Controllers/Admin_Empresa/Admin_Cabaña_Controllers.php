<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\CabañaRepo;
use App\Repositorios\ImagenRepo;
use App\Managers\CabañaManager;
use App\Helpers\HelpersGenerales;




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

      
      $Propiedades = $this->getPropiedades();
      
      $Entidad = $this->CabañaRepo->getEntidad();
      //
      $manager = new CabañaManager(null, $Request->all());

      if(!$manager->isValid())
      {
         return redirect()->back()->withErrors($manager->getErrors())->withInput($manager->getData());
      }

      // G u a r d o  l o s   d a t o s 
      $this->CabañaRepo->setEntidadDato($Entidad,$Request,$Propiedades);   

      // S i  e l  a r r a y   d e   i m á g e n e s   n o   e s t á   v a c i o   
      $files = $Request->file('img');      
      
      if($files[0] != null )
      {        

        foreach($files as $file)
        { 

          // C r e o   l a   i m a g e n   e n   l a   b a s e   d e   d a t o s 
          $Imagen = $this->ImagenRepo->setUnaImagenEnBaseDeDatos($Entidad->name, 'Cabañas/', 'cabaña_id', $Entidad->id);

          // G u a r d o   l a   i m a g e n   f í s i c a   e n   e l   s i s t e m a   d e   a r c h i v o s 
          $Nombre_de_la_imagen = HelpersGenerales::helper_convertir_cadena_para_url($Imagen->name).'-'.$Imagen->id;

            // I m a g e n   g r a n d e 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen,'.jpg');

            // I m a g e n   c h i c a 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen.'-chica','.jpg',300);

        }

        // M a r c o   u n a   i m a g e n   c o  m o   p r i n c i p a l
        $Imagen = $this->ImagenRepo->getImagenes('cabaña_id',$Entidad->id)->first();
        $this->ImagenRepo->setAtributoEspecifico($Imagen,'foto_principal','si');
        
      }
      
      

     return redirect()->route('get_admin_cabañas')->with('alert', 'Cabaña creada correctamente. En breve verás se cargará en la interfas de los usuarios.');
    
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

    // G u a r d o  l o s   d a t o s 
      $this->CabañaRepo->setEntidadDato($Entidad,$Request,$Propiedades);   

      // S i  e l  a r r a y   d e   i m á g e n e s   n o   e s t á   v a c i o   
      $files = $Request->file('img');      
      
      if($files[0] != null )
      {        

        foreach($files as $file)
        { 

          // C r e o   l a   i m a g e n   e n   l a   b a s e   d e   d a t o s 
          $Imagen = $this->ImagenRepo->setUnaImagenEnBaseDeDatos($Entidad->name, 'Cabañas/', 'cabaña_id', $Entidad->id);

          // G u a r d o   l a   i m a g e n   f í s i c a   e n   e l   s i s t e m a   d e   a r c h i v o s 
          $Nombre_de_la_imagen = HelpersGenerales::helper_convertir_cadena_para_url($Imagen->name).'-'.$Imagen->id;

            // I m a g e n   g r a n d e 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen,'.jpg');

            // I m a g e n   c h i c a 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen.'-chica','.jpg',300);

            // Ajusto los cache
            $nombre_campo = 'cabaña_id';
            
            
        }

        HelpersGenerales::helper_olvidar_este_cache('Imagenes'.$nombre_campo.$Entidad->id);
        HelpersGenerales::helper_olvidar_este_cache('ImagenPrincipal'.$nombre_campo.$Entidad->id);

        
      }

    return redirect()->back()->with('alert', 'Se editó con éxito. En breve se verás reflejado en la interfas de los usuarios'  );  
  }

  
}
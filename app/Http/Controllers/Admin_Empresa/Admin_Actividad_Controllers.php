<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\ActividadRepo;
use App\Repositorios\ImagenRepo;
use App\Helpers\HelpersGenerales;
use App\Managers\actividad_manager;




class Admin_Actividad_Controllers extends Controller
{

  protected $Entidad_principal;
  protected $Nombre_entidad_plural      = 'Actividades';
  protected $Nombre_entidad_singular    = 'Actividad';
  protected $Carpeta_view_admin         = strtolower($this->Nombre_entidad_plural);
  protected $Path_view_get_admin_index  = 'admin.'. $this->Carpeta_view_admin.'.home';
  protected $Path_view_get_admin_crear  = 'admin.'. $this->Carpeta_view_admin.'.crear';
  protected $Path_view_get_admin_editar = 'admin.'. $this->Carpeta_view_admin.'.editar';
  protected $Route_index                = 'get_admin_actividades';
  protected $Route_crear                = 'get_admin_actividades_crear';
  protected $Route_crear_post           = 'set_admin_actividades_crear';
  protected $Route_editar_post          = 'set_admin_actividades_editar';
  protected $Route_luego_de_crear       = $this->$Route_index;
  protected $Path_carpeta_imagenes      = 'Actividades/'; //donde se gurarda la imagen. Debe existir
  protected $Nombre_del_campo_imagen    = 'actividad_id'; //campo con el que se asocia

  

  public function __construct(ActividadRepo  $ActividadRepo,
                              ImagenRepo     $ImagenRepo )
  {
    $this->Entidad_principal    = $ActividadRepo;
    $this->ImagenRepo           = $ImagenRepo;
    
  }

  public function getPropiedades()
  {
    return ['name','descripcion_breve','ubicacion','description','cantidad_maxima_de_personas','estado','rank'];
  }

  public function getManager($Request)
  {
    $manager = new actividad_manager(null, $Request->all());

    return $manager;
  }

  
  public function get_admin(Request $Request)
  { 
    $Entidades           = $this->Entidad_principal->getEntidadesAllPaginadas( $Request,10);
    $Titulo              = $this->Nombre_entidad_plural;
    $Route_crear         = $this->Route_crear;
    $Route_busqueda      = $this->Route_index;
    $Carpeta_view_admin  = $this->Carpeta_view_admin;

    return view($this->Path_view_get_admin_index, compact('Entidades','Route_crear','Titulo','Route_busqueda','Carpeta_view_admin'));
  }

  
  public function get_admin_crear()
  {  
    $Route_crear_post    = $this->Route_crear_post;
    $Titulo              = 'Crear ' . strtolower($this->Nombre_entidad_singular);
    $Carpeta_view_admin  = $this->Carpeta_view_admin;

    return view($this->Path_view_get_admin_crear,compact('Route_crear_post','Titulo','Carpeta_view_admin'));
  }

  
  public function set_admin_crear(Request $Request)
  {     

      
      $Propiedades = $this->getPropiedades();
      
      $Entidad     = $this->Entidad_principal->getEntidad();
      
      $manager     = $this->getManager($Request);

      if(!$manager->isValid())
      {
         return redirect()->back()->withErrors($manager->getErrors())->withInput($manager->getData());
      }

      // G u a r d o  l o s   d a t o s 
      $this->Entidad_principal->setEntidadDato($Entidad,$Request,$Propiedades);   

      // S i  e l  a r r a y   d e   i m á g e n e s   n o   e s t á   v a c i o   
      $files = $Request->file('img');      
      
      if($files[0] != null )
      {        

        foreach($files as $file)
        { 

          // C r e o   l a   i m a g e n   e n   l a   b a s e   d e   d a t o s 
          $Imagen = $this->ImagenRepo->setUnaImagenEnBaseDeDatos($Entidad->name, $this->Path_carpeta_imagenes, $this->Nombre_del_campo_imagen, $Entidad->id);

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
      
      

     return redirect()->route($this->Route_luego_de_crear)->with('alert', 'Se creó correctamente. En breve se cargará en la interfás pública de los usuarios.');
    
  }

  
  public function get_admin_editar($id)
  {
    $Entidad             = $this->Entidad_principal->find($id);
    $Titulo              = 'Editar'; 
    $Route_editar_post   = $this->Route_editar_post;
    $Carpeta_view_admin  = $this->Carpeta_view_admin;

    return view($this->Path_view_get_admin_editar,compact('Entidad','Titulo','Route_editar_post','Carpeta_view_admin'));
  }

  
  public function set_admin_editar($id,Request $Request)
  {
    $Entidad = $this->Entidad_principal->find($id);    

    //propiedades para crear
    $Propiedades = $this->getPropiedades();

    // G u a r d o  l o s   d a t o s 
      $this->Entidad_principal->setEntidadDato($Entidad,$Request,$Propiedades);   

      // S i  e l  a r r a y   d e   i m á g e n e s   n o   e s t á   v a c i o   
      $files = $Request->file('img');      
      
      if($files[0] != null )
      {        

        foreach($files as $file)
        { 

          // C r e o   l a   i m a g e n   e n   l a   b a s e   d e   d a t o s 
          $Imagen = $this->ImagenRepo->setUnaImagenEnBaseDeDatos($Entidad->name, $this->Path_carpeta_imagenes, $this->Nombre_del_campo_imagen, $Entidad->id);

          // G u a r d o   l a   i m a g e n   f í s i c a   e n   e l   s i s t e m a   d e   a r c h i v o s 
          $Nombre_de_la_imagen = HelpersGenerales::helper_convertir_cadena_para_url($Imagen->name).'-'.$Imagen->id;

            // I m a g e n   g r a n d e 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen,'.jpg');

            // I m a g e n   c h i c a 
            $this->ImagenRepo->setImagenEnStorage($file,$Imagen->path,$Nombre_de_la_imagen.'-chica','.jpg',300);

            // Ajusto los cache
            $nombre_campo = $this->Nombre_del_campo_imagen;
            
            
        }

        HelpersGenerales::helper_olvidar_este_cache('Imagenes'.$nombre_campo.$Entidad->id);
        HelpersGenerales::helper_olvidar_este_cache('ImagenPrincipal'.$nombre_campo.$Entidad->id);

        
      }

    return redirect()->back()->with('alert', 'Se editó con éxito. En breve se verás reflejado en la interfás de los usuarios'  );  
  }

  
}
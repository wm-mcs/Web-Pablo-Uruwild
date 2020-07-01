<?php 
namespace App\Repositorios;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Input;
use Intervention\Image\ImageManagerStatic as Image;


abstract class BaseRepo 
{
    
    protected $entidad;    

    public function __construct()
    {      
      $this->entidad      = $this->getEntidad();
    }  

    public function find($id)
    {
      return $this->entidad->find($id);
    }

    public function destroy_entidad($id)
    {
      $entidad_a_borrar = $this->find($id);
      $entidad_a_borrar->delete();
    }
   
    public function destruir_esta_entidad($Entidad)
    {
      $Entidad->delete();
    }

    public function getEntidadesParaHome($Cantidad,$Order_key, $Order_value = 'desc')
    {
     $Entidades = $this->getEntidad()
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


    /**
     * Me trae la primera entidad que exista según ese atributo. Si no existe devuelve string vacio
     *
     * @return objet or string "" sino existe
     */
    public function getFirstEntidadSegunAtributo($atributo,$valor)
    {
      $Entidades =  $this->getEntidad()
                         ->where($atributo,$valor)
                         ->get();

      if($Entidades->count() > 0)
      {
        return $Entidades[0];
      }     

      return '';              

    }

    
    public function getEntidadActivas()
    {
      return $this->entidad                  
                  ->active()               
                  ->orderBy('id','desc')
                  ->get();
    }

    
    public function getEntidadActivasPaginadas($request,$paginacion)
    {
      return $this->entidad
                  ->name($request->get('name')) 
                  ->active()               
                  ->orderBy('id','desc')
                  ->paginate($paginacion);
    }

    /**
     * Entidades Activas Paginadas y ordenadas
     */
    public function getEntidadActivasYOrdenadasSegunPaginadas($request,$OrdenadasSegunAtributo,$Orden,$paginacion)
    {
      return $this->entidad
                  ->name($request->get('name')) 
                  ->active()               
                  ->orderBy($OrdenadasSegunAtributo,$Orden)
                  ->paginate($paginacion);
    }

    /**
     * Entidades All ya paginadas Paginadas 
     */
    public function getEntidadesAllPaginadas($request,$paginacion)
    {

    return $this->entidad
                ->name($request->get('name'))                
                ->orderBy('id','desc')
                ->paginate($paginacion);
  
    }

    public function getEntidadesAllPaginadasYOrdenadas($request,$OrdenadasSegunAtributo,$Orden,$paginacion)
    {

    return $this->entidad
                ->name($request->get('name'))                
                ->orderBy($OrdenadasSegunAtributo,$Orden)
                ->paginate($paginacion);
  
    }

    /**
     * Devuelve una coleccion de una entidad segun un atributo variable y ordenada como queramos y Paginadas.
     */
    public function getEntidadActivasAll_Segun_Atributo_y_Ordenadas($atributo,$valor_atributo,$orden,$paginacion)
    {
      return $this->entidad
                  ->where($atributo,$valor_atributo)             
                  ->orderBy('id',$orden)
                  ->paginate($paginacion);
    }


    /**
     * Ultimas Entidades Activas
     */
    public function getUltimasEntidadesRegistradasRandomActive($request,$cantidad)
    {

      $cantidad_de_entidades =  $this->entidad->active()->get()->count();

      if($cantidad_de_entidades >= $cantidad)
      {
        $entidades = $this->entidad
                          ->name($request->get('name'))                
                          ->active()
                          ->orderBy('id','DESC')
                          ->take($cantidad)
                          ->get();
      }
      else
      {
        $entidades = $this->entidad
                          ->name($request->get('name'))                
                          ->active()
                          ->orderBy('id','DESC')
                          ->get();
      }  

    return $entidades;
  
    }


    public function getEntidadesActivasYOrdenadas($Cantidad,$Orden)
    {
      $cantidad_de_entidades =  $this->entidad->active()->get()->count();

      if($cantidad_de_entidades >= $Cantidad)
      {
        $entidades = $this->entidad               
                          ->active()
                          ->orderBy('id',$Orden)
                          ->take($Cantidad)
                          ->get();
      }
      else
      {
        $entidades = $this->entidad              
                          ->active()
                          ->orderBy('id',$Orden)
                          ->get();
      }  

    return $entidades;
    }

     

    /**
     * funcion que va a hacer creada el los repo que extiendan.
     */
    abstract public function getEntidad();



    //setters
    public function setEntidadDato($Entidad,$request,$Propiedades)
    {
        foreach ($Propiedades as $Propiedad) 
        {
          if(($request->input($Propiedad) != null) && ($request->input($Propiedad) != ''))
          {            
           $Entidad->$Propiedad = $request->input($Propiedad);
          }
          elseif($request->input($Propiedad) == '')
          {
            $Entidad->$Propiedad = $request->input($Propiedad);
          }
         
        } 

        $Entidad->save();     

        return $Entidad;
    }

    public function setImagenEnStorage($file,$carpetaDelArchivo,$nombreDelArchivo,$ExtensionDelArchivo,$redimencionar_a = null)
    {
      $nombre = $carpetaDelArchivo.$nombreDelArchivo.$ExtensionDelArchivo;
      if($redimencionar_a != null)
        {
            $imagen_insert = Image::make(File::get($file))->resize($redimencionar_a, null, function ($constraint) {
                                                                           $constraint->aspectRatio();
                                                                       })->save('imagenes/'.$nombre,90);
        }
        else
        {
           $imagen_insert = Image::make(File::get($file)); 
           $imagen_insert->save('imagenes/'.$nombre,70);   
        }   
    }


    public function setImagen($Entidad,$request,$nombreDelCampoForm,$carpetaDelArchivo,$nombreDelArchivo,$ExtensionDelArchivo,$redimencionar_a = null)
    {
      if($request->hasFile($nombreDelCampoForm))
       {
         //obtenemos el campo file definido en el formulario
         $file = $request->file($nombreDelCampoForm);
         
         //nombre del Archico / Carpeta Incluido
         $nombre = $carpetaDelArchivo.$nombreDelArchivo.$ExtensionDelArchivo;
         

        if($redimencionar_a != null)
        {
            $imagen_insert = Image::make(File::get($file))->resize($redimencionar_a, null, function ($constraint) {
                                                                           $constraint->aspectRatio();
                                                                       })->save('imagenes/'.$nombre,70);
        }
        else
        {
           $imagen_insert = Image::make(File::get($file)); 
           $imagen_insert->save('imagenes/'.$nombre,70);   
        }        
         
         
       }
    }

     /**
       * Para subidas multiples  
       */  
    public function setImagenMultiples($Entidad,$file,$nombreDelCampoForm,$carpetaDelArchivo,$nombreDelArchivo,$ExtensionDelArchivo)
    {   
         //nombre del Archico / Carpeta Incluido
         $nombre = $carpetaDelArchivo.$nombreDelArchivo.$ExtensionDelArchivo;
         $Entidad->$nombreDelCampoForm= $nombre;              
         
         //indicamos que queremos guardar un nuevo archivo en el disco local
         $imagen_insert = Image::make(File::get($file));
         $imagen_insert->save('imagenes/'.$nombre,70);    
         $Entidad->save();  


       
         
       
    }


    

    public function set_datos_de_img($file, $Entidad,$nombre_de_la_propiedad,$id_de_la_propiedad,$request,$LugarDondeSeAloja)
    {

          
          $Imagen = $Entidad;    

          //nombre de la calve foraña y su valor  
          $Imagen->$nombre_de_la_propiedad = $id_de_la_propiedad;

          //estado activo  
          $Imagen->estado = 'si';

          //guardo  
          $Imagen->save();

          $this->setImagenMultiples($Imagen,$file,'img',$LugarDondeSeAloja, $Imagen->id,'.png'); 

          $Imagen->save();  

        

      }

       
    

    

     /**
     * grabar entidad atributo especifico
     */
    public function setAtributoEspecifico($Entidad,$atributo,$valor)
    {
      if($valor != '')
      {
        $Entidad->$atributo = $valor;
        $Entidad->save();
      }
      
    }


    public function HelperPrepararStringParaUrl($cadena)
    {
        $cadena = trim($cadena);
        //quito caracteres - 
        $cadena = str_replace('-' ,' ', $cadena);
        $cadena = str_replace(' ' ,'-', $cadena);
        $cadena = str_replace('?' ,'', $cadena);
        $cadena = str_replace('¿' ,'', $cadena);

        return $cadena;
    }
    

}   

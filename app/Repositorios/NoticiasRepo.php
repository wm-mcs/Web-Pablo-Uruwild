<?php 

namespace App\Repositorios;

use App\Entidades\Noticia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

/**
* Repositorio de consultas a la base de datos User
*/
class NoticiasRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Noticia();
  }

  //guetters/////////////////////////////////////////////////////////////////////


  public function getUltimosBlogs()
  {
    return Cache::remember('UltimosBlogs', 500, function() {
                              return $this->getEntidadesActivasYOrdenadas(3,'DESC'); 
                          }); 
  }

 /**
  *  Le paso un blog y busco otros similares
  */
  public function getBlogsRelacionados($Blog)
  {
    $Blogs = $this->getEntidad()
                  ->Active()
                  ->where('id','<>',$Blog->id)
                  ->where(function($q) use ($Blog)
                       {   
                          if($Blog->tags != null)    
                          {
                            $Tags = explode(',',trim($Blog->tags));
                            foreach($Tags as $Tag)
                            {
                              $q->where('tags', "LIKE","%".trim($Tag)."%"); 
                              $q->orWhere('name', "LIKE","%".trim($Tag)."%");
                            }

                            
                          }  
                                                   
                           
                       })->get();

                  return $Blogs;
  }

  //setters//////////////////////////////////////////////////////////////////////

  


  
}
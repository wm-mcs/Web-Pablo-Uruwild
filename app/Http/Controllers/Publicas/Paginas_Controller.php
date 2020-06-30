<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use App\Helpers\CurlHelper;
use App\Repositorios\TourRepo;
use App\Repositorios\PortadaDePaginaRepo;  


class Paginas_Controller extends Controller
{
   
    protected $NoticiasRepo;
    protected $EmpresaRepo;    
    protected $CurlHelper;
    protected $TourRepo;
    protected $PortadaDePaginaRepo;

    public function __construct(NoticiasRepo        $NoticiasRepo,
                                EmpresaRepo         $EmpresaRepo,                                 
                                CurlHelper          $CurlHelper,
                                TourRepo            $TourRepo,
                                PortadaDePaginaRepo $PortadaDePaginaRepo   )
    {
        
        $this->NoticiasRepo        = $NoticiasRepo;
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->CurlHelper          = $CurlHelper;
        $this->TourRepo            = $TourRepo;
        $this->PortadaDePaginaRepo = $PortadaDePaginaRepo; 
    }

    // C o n t a c t o
    public function get_pagina_contacto()
    {

        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.paginas_personalizadas.laura_contacto', compact('Empresa','blogs'));
    }

    // S e r v i c i o s
    public function get_pagina_servicios()
    {
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.paginas_personalizadas.laura_servicios', compact('Empresa','blogs'));
    }

    // Q u i é n   e s   L a u r a 
    public function get_pagina_quien_es()
    {
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.paginas_personalizadas.laura_quien_es', compact('Empresa','blogs'));
    }



    
    // B l o g   I n d i v i d u a l 
    public function get_pagina_noticia_individual($name,$id)  {
       
        $Noticia              = $this->NoticiasRepo->find($id);
        $Empresa              = $this->EmpresaRepo->getEmpresaDatos();        
        $blogs                = '';
        $blogs_relacionados   = $this->NoticiasRepo->getBlogsRelacionados($Noticia);
        
        return view('paginas.noticias.noticia_individual',compact('Noticia','Empresa','blogs','blogs_relacionados'));
    }

    // C i r c u i t o 
    public function get_pagina_tour_individual($name,$id)
    {
        $Tour                 = $this->TourRepo->find($id);
        $Empresa              = $this->EmpresaRepo->getEmpresaDatos();        
        $blogs                = '';


        return view('paginas.tours.tour_individual',compact('Tour','Empresa','blogs'));
    }


    // P á g i n a   d e   T o u r s
    public function get_pagina_tours(Request $Request)
    {
        $Tours          = Cache::remember('ToursPagianaTorus', 2000, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(50,'name', 'desc','tour');
                          });

        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();  
        $Portada        = Cache::remember('PortadaTours', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','tours');
                          }); 


        return view('paginas.tours.tours_pagina',compact('Tours','Empresa','Portada'));
    }


    // P á g i n a   d e   P r o d u c t o s 
    public function get_pagina_productos(Request $Request)
    {
        $Productos      = Cache::remember('ProductosPagianaTorus', 2000, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(50,'name', 'desc','producto');
                          });

        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();  
        $Portada        = Cache::remember('PortadaProductos', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','productos');
                          }); 


        return view('paginas.prodcutos_especiales.productos_pagina',compact('Productos','Empresa','Portada'));
    }





   
    



}
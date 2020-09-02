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
use App\Repositorios\CabañaRepo;
use App\Repositorios\TeamRepo;
use App\Helpers\HelpersSessionLenguaje;

class Paginas_Controller extends Controller
{
   
    protected $NoticiasRepo;
    protected $EmpresaRepo;    
    protected $CurlHelper;
    protected $TourRepo;
    protected $PortadaDePaginaRepo;
    protected $CabañaRepo;
    protected $TeamRepo;

    public function __construct(NoticiasRepo        $NoticiasRepo,
                                EmpresaRepo         $EmpresaRepo,                                 
                                CurlHelper          $CurlHelper,
                                TourRepo            $TourRepo,
                                PortadaDePaginaRepo $PortadaDePaginaRepo,
                                CabañaRepo          $CabañaRepo,
                                TeamRepo            $TeamRepo   )
    {
        
        $this->NoticiasRepo        = $NoticiasRepo;
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->CurlHelper          = $CurlHelper;
        $this->TourRepo            = $TourRepo;
        $this->PortadaDePaginaRepo = $PortadaDePaginaRepo; 
        $this->CabañaRepo          = $CabañaRepo;
        $this->TeamRepo            = $TeamRepo;
    }

    // C o n t a c t o
    public function get_pagina_contacto()
    {        
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();

        $Teams          = Cache::remember('TeamsContacto', 2000, function(){
                             return  $this->TeamRepo->getEntidadesParaHome(2,'rank', 'desc');
                           });

        $Portada        = Cache::remember('PortadaContacto', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','contacto');
                          });        

        return view('paginas.paginas_personalizadas.laura_contacto', compact('Empresa','Teams','Portada'));
    }

    // S e r v i c i o s
    public function get_pagina_servicios()
    {
        $blogs   = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.paginas_personalizadas.laura_servicios', compact('Empresa','blogs'));
    }

    // Q u i é n   e s   L a u r a 
    public function get_pagina_quien_es()
    {
        
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();

        $Teams          = Cache::remember('TeamsQuienes', 2000, function(){
                          return  $this->TeamRepo->getEntidadesParaHome(5,'rank', 'desc');
                          });

        $Portada        = Cache::remember('PortadaSobre', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','sobre_uruwild');
                          });    


        
        return view('paginas.paginas_personalizadas.laura_quien_es', compact('Empresa','Portada','Teams'));
    }
    
    // B l o g   I n d i v i d u a l 
    public function get_pagina_noticia_individual($name,$id)  {
       
        $Noticia              = $this->NoticiasRepo->find($id);
        $Empresa              = $this->EmpresaRepo->getEmpresaDatos();        
        $blogs                = '';
        $blogs_relacionados   = $this->NoticiasRepo->getBlogsRelacionados($Noticia);
        
        return view('paginas.noticias.noticia_individual',compact('Noticia','Empresa','blogs','blogs_relacionados'));
    }

    // C a b a ñ a   I n d i v i d u a l 
    public function get_pagina_cabaña_individual($lenguaje,$name,$id)  {
       
        $Cabaña              = $this->CabañaRepo->find($id);
        $Empresa             = $this->EmpresaRepo->getEmpresaDatos();     
        
        return view('paginas.cabañas.cabaña_individual',compact('Cabaña','Empresa'));
    }

    // C i r c u i t o 
    public function get_pagina_tour_individual($lenguaje,$name,$id)
    {
        $Tour                 = $this->TourRepo->find($id);
        $Empresa              = $this->EmpresaRepo->getEmpresaDatos();        
        $blogs                = '';

        return view('paginas.tours.tour_individual',compact('Tour','Empresa','blogs'));
    }


    // P á g i n a   d e   t o u r s
    public function get_pagina_tours($lenguaje,Request $Request)
    {
        $Tours          = Cache::remember('ToursPagianaTorus', 2000, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(50,'rank', 'desc','tour');
                          });

        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();  
        $Portada        = Cache::remember('PortadaTours', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','tours');
                          });   


        if(!HelpersSessionLenguaje::validarRouteTeniendoEnCuentaElLenguaje($lenguaje,'get_pagina_tours')['Validacion'])
        {
          $Route = HelpersSessionLenguaje::validarRouteTeniendoEnCuentaElLenguaje($lenguaje,'get_pagina_tours')['Route'];
          return redirect()->$Route;
        }

        return view('paginas.tours.tours_pagina',compact('Tours','Empresa','Portada'));
    }

    // P á g i n a   d e   c a b a ñ a s
    public function get_pagina_cabañas(Request $Request)
    {
        $Cabañas        = Cache::remember('CabañasPagina', 2000, function(){
                          return $this->CabañaRepo->getEntidadesParaHome(30,'rank','desc');
                          });

        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();  
        $Portada        = Cache::remember('PortadaCabañas', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','cabañas');
                          }); 

        return view('paginas.cabañas.cabañas_pagina',compact('Cabañas','Empresa','Portada'));
    }

    


    // P á g i n a   d e   P r o d u c t o s 
    public function get_pagina_productos(Request $Request)
    {
        $Productos      = Cache::remember('ProductosPagianaTorus', 2000, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(50,'name', 'rank','producto');
                          });

        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();  
        $Portada        = Cache::remember('PortadaProductos', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','productos');
                          }); 

        return view('paginas.prodcutos_especiales.productos_pagina',compact('Productos','Empresa','Portada'));
    }

    // P á g i n a   d e   T u r i s m o   R u r a l  
    public function get_pagina_turismo_rural(Request $Request)
    {
        $Turismo_rural  = Cache::remember('TurismoRuralPagina', 2000, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(50,'rank', 'desc','turismo_rural');
                          });
        $Cabañas        = Cache::remember('CabañasPagina', 2000, function(){
                          return $this->CabañaRepo->getEntidadesParaHome(30,'rank','desc');
                          });

        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();  
        $Portada        = Cache::remember('PortadaTurimoRural', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','turismo_rural');
                          }); 

        return view('paginas.turismo_rural.turismo_rural_pagina',compact('Turismo_rural','Empresa','Portada','Cabañas'));
    }


    





   
    



}
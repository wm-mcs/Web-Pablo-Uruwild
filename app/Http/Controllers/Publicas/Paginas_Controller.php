<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use App\Helpers\CurlHelper;


class Paginas_Controller extends Controller
{
   
    protected $NoticiasRepo;
    protected $EmpresaRepo;    
    protected $CurlHelper;

    public function __construct(NoticiasRepo        $NoticiasRepo,
                                EmpresaRepo         $EmpresaRepo,                                 
                                CurlHelper          $CurlHelper   )
    {
        
        $this->NoticiasRepo        = $NoticiasRepo;
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->CurlHelper          = $CurlHelper;
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



   
    



}
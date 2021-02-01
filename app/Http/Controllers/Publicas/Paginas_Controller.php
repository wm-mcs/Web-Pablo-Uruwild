<?php

namespace App\Http\Controllers\Publicas;

use App\Helpers\CurlHelper;
use App\Helpers\HelpersSessionLenguaje;
use App\Http\Controllers\Controller;
use App\Repositorios\CabañaRepo;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\PortadaDePaginaRepo;
use App\Repositorios\TeamRepo;
use App\Repositorios\TextoRepo;
use App\Repositorios\TourRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Paginas_Controller extends Controller
{

    protected $NoticiasRepo;
    protected $EmpresaRepo;
    protected $CurlHelper;
    protected $TourRepo;
    protected $PortadaDePaginaRepo;
    protected $CabañaRepo;
    protected $TeamRepo;
    protected $TextoRepo;

    public function __construct(NoticiasRepo $NoticiasRepo,
        EmpresaRepo $EmpresaRepo,
        CurlHelper $CurlHelper,
        TourRepo $TourRepo,
        PortadaDePaginaRepo $PortadaDePaginaRepo,
        CabañaRepo $CabañaRepo,
        TeamRepo $TeamRepo,
        TextoRepo $TextoRepo) {

        $this->NoticiasRepo = $NoticiasRepo;
        $this->EmpresaRepo = $EmpresaRepo;
        $this->CurlHelper = $CurlHelper;
        $this->TourRepo = $TourRepo;
        $this->PortadaDePaginaRepo = $PortadaDePaginaRepo;
        $this->CabañaRepo = $CabañaRepo;
        $this->TeamRepo = $TeamRepo;
        $this->TextoRepo = $TextoRepo;
    }

    // C o n t a c t o
    public function get_pagina_contacto()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $Teams = Cache::remember('TeamsContacto', 2000, function () {
            return $this->TeamRepo->getEntidadesParaHome(2, 'rank', 'desc');
        });

        $Portada = Cache::remember('PortadaContacto', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'contacto');
        });

        $Textos = $this->TextoRepo->getTextosDeSeccion('contacto');

        return view('paginas.paginas_personalizadas.laura_contacto', compact('Empresa', 'Teams', 'Portada', 'Textos'));
    }

    // S e r v i c i o s
    public function get_pagina_servicios()
    {
        $blogs = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.paginas_personalizadas.laura_servicios', compact('Empresa', 'blogs'));
    }

    // Q u i é n   e s   L a u r a
    public function get_pagina_quien_es()
    {

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $Teams = Cache::remember('TeamsQuienes', 2000, function () {
            return $this->TeamRepo->getEntidadesParaHome(5, 'rank', 'desc');
        });

        $Portada = Cache::remember('PortadaSobre', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'sobre_uruwild');
        });

        $Textos = $this->TextoRepo->getTextosDeSeccion('quien_es');

        return view('paginas.paginas_personalizadas.laura_quien_es', compact('Empresa', 'Portada', 'Teams', 'Textos'));
    }

    // B l o g   I n d i v i d u a l
    public function get_pagina_noticia_individual($name, $id)
    {

        $Noticia = $this->NoticiasRepo->find($id);
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $blogs = '';
        $blogs_relacionados = $this->NoticiasRepo->getBlogsRelacionados($Noticia);

        return view('paginas.noticias.noticia_individual', compact('Noticia', 'Empresa', 'blogs', 'blogs_relacionados'));
    }

    // C a b a ñ a   I n d i v i d u a l
    public function get_pagina_cabaña_individual($lenguaje, $name, $id)
    {

        $Cabaña = $this->CabañaRepo->find($id);
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $Textos = $this->TextoRepo->getTextosDeSeccion('cabaña_individual');

        return view('paginas.cabañas.cabaña_individual', compact('Cabaña', 'Empresa', 'Textos'));
    }

    // C i r c u i t o
    public function get_pagina_tour_individual($lenguaje, $name, $id)
    {
        $Tour = $this->TourRepo->find($id);
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $blogs = '';
        $Textos = $this->TextoRepo->getTextosDeSeccion('tour_individual');

        return view('paginas.tours.tour_individual', compact('Tour', 'Empresa', 'blogs', 'Textos'));
    }

    // P á g i n a   d e   t o u r s
    public function get_pagina_tours($Lenguaje, Request $Request)
    {
        $Tours = Cache::remember('ToursPagianaTorus', 2000, function () {
            return $this->TourRepo->getEntidadesParaHomeTour(50, 'rank', 'desc', 'tour');
        });

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $Portada = Cache::remember('PortadaTours', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'tours');
        });

        $Textos = $this->TextoRepo->getTextosDeSeccion('listado_tours');

        if (!HelpersSessionLenguaje::validarRouteTeniendoEnCuentaElLenguaje($Lenguaje, 'get_pagina_tours')) {
            return redirect()->route('get_pagina_tours', HelpersSessionLenguaje::getAndPutSessionLenguaje(null, null));
        }

        return view('paginas.tours.tours_pagina', compact('Tours', 'Empresa', 'Portada', 'Textos'));
    }

    // P á g i n a   d e   c a b a ñ a s
    public function get_pagina_destacados($Lenguaje, Request $Request)
    {
        $Entidades = Cache::remember('Destacados', 2000, function () {
            return $this->TourRepo->getEntidadesDestacadas(50, 'rank');
        });

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $Portada = Cache::remember('PortadaCabañas', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'cabañas');
        });

        $Textos = $this->TextoRepo->getTextosDeSeccion('listado_cabañas');

        if (!HelpersSessionLenguaje::validarRouteTeniendoEnCuentaElLenguaje($Lenguaje, 'get_pagina_destacados')) {
            return redirect()->route('get_pagina_cabañas', HelpersSessionLenguaje::getAndPutSessionLenguaje(null, null));
        }

        return view('paginas.cabañas.cabañas_pagina', compact('Entidades', 'Empresa', 'Portada', 'Textos'));
    }

    // P á g i n a   d e   P r o d u c t o s
    public function get_pagina_productos($Lenguaje, Request $Request)
    {
        $Productos = Cache::remember('ProductosPagianaTorus', 2000, function () {
            return $this->TourRepo->getEntidadesParaHomeTour(50, 'name', 'rank', 'producto');
        });

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $Portada = Cache::remember('PortadaProductos', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'productos');
        });
        $Textos = $this->TextoRepo->getTextosDeSeccion('listado_productos');

        if (!HelpersSessionLenguaje::validarRouteTeniendoEnCuentaElLenguaje($Lenguaje, 'get_pagina_productos')) {
            return redirect()->route('get_pagina_productos', HelpersSessionLenguaje::getAndPutSessionLenguaje(null, null));
        }

        return view('paginas.prodcutos_especiales.productos_pagina', compact('Productos', 'Empresa', 'Portada', 'Textos'));
    }

    // P á g i n a   d e   T u r i s m o   R u r a l
    public function get_pagina_turismo_rural($Lenguaje, Request $Request)
    {
        $Turismo_rural = Cache::remember('TurismoRuralPagina', 2000, function () {
            return $this->TourRepo->getEntidadesParaHomeTour(50, 'rank', 'desc', 'turismo_rural');
        });
        $Cabañas = Cache::remember('CabañasPagina', 2000, function () {
            return $this->CabañaRepo->getEntidadesParaHome(30, 'rank', 'desc');
        });

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        $Portada = Cache::remember('PortadaTurimoRural', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'turismo_rural');
        });

        $Textos = $this->TextoRepo->getTextosDeSeccion('listado_turismo_rural');

        if (!HelpersSessionLenguaje::validarRouteTeniendoEnCuentaElLenguaje($Lenguaje, 'get_pagina_turismo_rural')) {
            return redirect()->route('get_pagina_turismo_rural', HelpersSessionLenguaje::getAndPutSessionLenguaje(null, null));
        }

        return view('paginas.turismo_rural.turismo_rural_pagina', compact('Turismo_rural', 'Empresa', 'Portada', 'Cabañas', 'Textos'));
    }

}

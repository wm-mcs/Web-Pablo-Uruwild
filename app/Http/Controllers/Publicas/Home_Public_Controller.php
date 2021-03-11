<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\PortadaDePaginaRepo;
use App\Repositorios\TeamRepo;
use App\Repositorios\TextoRepo;
use App\Repositorios\TourRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $NoticiasRepo;
    protected $TeamRepo;

    protected $TourRepo;
    protected $PortadaDePaginaRepo;
    protected $TextoRepo;

    public function __construct(ImgHomeRepo $ImgHomeRepo,
        EmpresaRepo $EmpresaRepo,
        NoticiasRepo $NoticiasRepo,
        TeamRepo $TeamRepo,

        TourRepo $TourRepo,
        PortadaDePaginaRepo $PortadaDePaginaRepo,
        TextoRepo $TextoRepo) {
        $this->ImgHomeRepo  = $ImgHomeRepo;
        $this->EmpresaRepo  = $EmpresaRepo;
        $this->NoticiasRepo = $NoticiasRepo;
        $this->TeamRepo     = $TeamRepo;

        $this->TourRepo            = $TourRepo;
        $this->PortadaDePaginaRepo = $PortadaDePaginaRepo;
        $this->TextoRepo           = $TextoRepo;

    }

    public function get_home(Request $Request)
    {

        $Empresa = $this->EmpresaRepo->getEmpresaDatos();

        $Teams = Cache::remember('Teams', 2000, function () {
            return $this->TeamRepo->getEntidadesParaHome(6, 'rank', 'desc');
        });

        $Destacados = Cache::remember('DestacadosHome', 40, function () {
            return $this->TourRepo->getEntidadesDestacadas(6, 'rank');
        });

        $Circuitos = Cache::remember('CircuitosHome', 2000, function () {
            return $this->TourRepo->getEntidadesParaHomeTour(3, 'rank', 'desc', 'tour');
        });

        $Productos = Cache::remember('ProductosHome', 2000, function () {
            return $this->TourRepo->getEntidadesParaHomeTour(4, 'rank', 'desc', 'producto');
        });

        $Turismo_rural = Cache::remember('TurismoRuralHome', 2000, function () {
            return $this->TourRepo->getEntidadesParaHomeTour(6, 'rank', 'desc', 'turismo_rural');
        });

        $Portada = Cache::remember('PortadaHome', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'home');
        });

        $Portada_pesca = Cache::remember('PortadaPescaHome', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'home_pesca');
        });

        $Portada_rural = Cache::remember('PortadaTurismoRuralHome', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'home_rural');
        });

        $Portada_ecotu = Cache::remember('PortadaEcoTurismoHome', 2000, function () {
            return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name', 'home_actividades');
        });

        $Textos = $this->TextoRepo->getTextosDeSeccion('home');

        return view('paginas.paginas_personalizadas.laura_home', compact('Empresa', 'Teams', 'Destacados', 'Circuitos', 'Productos', 'Portada', 'Turismo_rural', 'Portada_pesca', 'Portada_rural', 'Portada_ecotu', 'Textos'));
    }

}

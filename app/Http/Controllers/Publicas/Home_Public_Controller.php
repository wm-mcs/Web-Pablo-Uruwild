<?php
namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\TrayectoriaRepo;
use App\Repositorios\CabañaRepo;
use Illuminate\Support\Facades\Cache;
use App\Repositorios\TeamRepo;
use App\Repositorios\TourRepo;
use App\Repositorios\PortadaDePaginaRepo;                 


class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $NoticiasRepo;
    protected $TeamRepo;
    protected $CabañaRepo;
    protected $TourRepo;
    protected $PortadaDePaginaRepo;

  

    public function __construct(ImgHomeRepo          $ImgHomeRepo,
                                EmpresaRepo          $EmpresaRepo, 
                                NoticiasRepo         $NoticiasRepo,
                                TeamRepo             $TeamRepo,
                                CabañaRepo           $CabañaRepo,
                                TourRepo             $TourRepo,
                                PortadaDePaginaRepo  $PortadaDePaginaRepo )
    {
        $this->ImgHomeRepo         = $ImgHomeRepo;
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->NoticiasRepo        = $NoticiasRepo;
        $this->TeamRepo            = $TeamRepo;
        $this->CabañaRepo          = $CabañaRepo;
        $this->TourRepo            = $TourRepo;
        $this->PortadaDePaginaRepo = $PortadaDePaginaRepo;
        
    }

    public function get_home(Request $Request)
    {
        
           
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos(); 

        
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        $Teams          = Cache::remember('TeamsHome', 30, function(){
                          return  $this->TeamRepo->getEntidadesParaHome(2,'name', 'desc');
                          });

        $Cabañas        = Cache::remember('CabañasHome', 40, function(){
                          return $this->CabañaRepo->getEntidadesParaHome(4,'rank','desc');
                          });

        $Circuitos      = Cache::remember('CircuitosHome', 40, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(3,'name', 'desc','tour');
                          });

        $Productos      = Cache::remember('ProductosHome', 40, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(4,'name', 'desc','producto');
                          });

        $Portada        = Cache::remember('PortadaHome', 20000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','home');
                          });        

        return view('paginas.paginas_personalizadas.laura_home', compact('Empresa','blogs','Teams','Cabañas','Circuitos','Productos','Portada'));
    }


}

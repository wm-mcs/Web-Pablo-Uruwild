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
       
        $Teams          = Cache::remember('Teams', 2000, function(){
                          return  $this->TeamRepo->getEntidadesParaHome(2,'name', 'desc');
                          });

        $Cabañas        = Cache::remember('CabañasHome', 40, function(){
                          return $this->CabañaRepo->getEntidadesParaHome(6,'rank','desc');
                          });

        $Circuitos      = Cache::remember('CircuitosHome', 2000, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(3,'rank', 'desc','tour');
                          });

        $Productos      = Cache::remember('ProductosHome', 2000, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(4,'rank', 'desc','producto');
                          });

        $Turismo_rural  = Cache::remember('TurismoRuralHome', 2000, function(){
                          return $this->TourRepo->getEntidadesParaHomeTour(6,'rank', 'desc','turismo_rural');
                          });

        $Portada        = Cache::remember('PortadaHome', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','home');
                          });     

        $Portada_pesca = Cache::remember('PortadaPescaHome', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','portada_pesca');
                          }); 

        $Portada_rural = Cache::remember('PortadaTurismoRuralHome', 2000, function(){
                          return $this->PortadaDePaginaRepo->getFirstEntidadSegunAtributo('name','portada_turismo_rural');
                          }); 

        

                       

        return view('paginas.paginas_personalizadas.laura_home', compact('Empresa','Teams','Cabañas','Circuitos','Productos','Portada','Turismo_rural','Portada_pesca','Portada_rural'));
    }


}

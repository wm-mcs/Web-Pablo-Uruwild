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


class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $NoticiasRepo;
    protected $TeamRepo;
    protected $CabañaRepo;
  

    public function __construct(ImgHomeRepo     $ImgHomeRepo,
                                EmpresaRepo     $EmpresaRepo, 
                                NoticiasRepo    $NoticiasRepo,
                                TeamRepo        $TeamRepo,
                                CabañaRepo      $CabañaRepo )
    {
        $this->ImgHomeRepo     = $ImgHomeRepo;
        $this->EmpresaRepo     = $EmpresaRepo;
        $this->NoticiasRepo    = $NoticiasRepo;
        $this->TeamRepo        = $TeamRepo;
        $this->CabañaRepo      = $CabañaRepo;
        
    }

    public function get_home(Request $Request)
    {
        
           
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos(); 

        
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        $Teams          = Cache::remember('TeamsHome', 30, function(){
                          return  $this->TeamRepo->getEntidadActivas();
                          });

        $Cabañas        = Cache::remember('CabañasHome', 40, function(){
                          return $this->CabañaRepo->getCabañasParaHome();
                          });

        

        return view('paginas.paginas_personalizadas.laura_home', compact('Empresa','blogs','Teams','Cabañas'));
    }


}

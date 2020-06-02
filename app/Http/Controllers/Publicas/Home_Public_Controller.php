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


class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $NoticiasRepo;
    protected $TrayectoriaRepo;
    protected $CabañaRepo;
  

    public function __construct(ImgHomeRepo     $ImgHomeRepo,
                                EmpresaRepo     $EmpresaRepo, 
                                NoticiasRepo    $NoticiasRepo,
                                TrayectoriaRepo $TrayectoriaRepo,
                                CabañaRepo      $CabañaRepo )
    {
        $this->ImgHomeRepo     = $ImgHomeRepo;
        $this->EmpresaRepo     = $EmpresaRepo;
        $this->NoticiasRepo    = $NoticiasRepo;
        $this->TrayectoriaRepo = $TrayectoriaRepo;
        $this->CabañaRepo      = $CabañaRepo;
        
    }

    public function get_home(Request $Request)
    {
        
           
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos(); 

        
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        $Trayectorias   = $this->TrayectoriaRepo->getTrayectoriaSegunTipoOrdenadas('experiencia');
        $Educacion      = $this->TrayectoriaRepo->getTrayectoriaSegunTipoOrdenadas('educacion');
        $Cabañas        = Cache::remember('CabañasHome', 60, function(){
                          return $this->CabañaRepo->getCabañasParaHome();
                          });

        

        return view('paginas.paginas_personalizadas.laura_home', compact('Empresa','blogs','Trayectorias','Educacion','Cabañas'));
    }


}

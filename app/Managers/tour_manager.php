
<?php  
namespace App\Managers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;


class tour_manager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      'name'                        => 'required',
      'descripcion_breve'           => 'required',
      'img'                         => 'required'
             ];

    return $rules;
  }
 
  
  
  
}
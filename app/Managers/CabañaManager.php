<?php  
namespace App\Managers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;

/**
* 
*/
class CabañaManager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      'name'                        => 'required',
      'description'                 => 'required',
      'img'                         => 'required',
      'cantidad_maxima_de_personas' => 'alpha_num'
             ];

    return $rules;
  }
 
  
  
  
}
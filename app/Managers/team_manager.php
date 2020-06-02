<?php  
namespace App\Managers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;

/**
* 
*/
class team_manager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      'name'            => 'required',
      
      'img'             => 'required'
             ];

    return $rules;
  }
 
  
  
  
}
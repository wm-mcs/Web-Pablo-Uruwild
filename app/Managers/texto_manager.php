<?php  
namespace App\Managers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;


class texto_manager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      'pagina'  => 'required',
      'texto'   => 'required'
             ];

    return $rules;
  }
 
  
  
  
}
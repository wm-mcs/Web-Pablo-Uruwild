<?php  
namespace App\Managers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;


class portada_de_pagina_manager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      'titulo'               => 'required|max:30',
      'sub_titulo'           => 'max:60',
      'parrafo'              => 'max:90',
      'posicion'             => 'required',
      'llamado_a_la_accion'  => 'max:60'
             ];

    return $rules;
  }
 
 
  
  
}
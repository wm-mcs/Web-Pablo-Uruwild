@extends('layouts.admin_layout.admin_layout')

@section('miga-de-pan') 
 <h1 class="titulos-class  text-color-secondary font-secondary">Team de Uruwild</h1>
@stop

@section('content')



<div class="container">
  <div class="row  p-3 justify-content-between ">
   


    <div class="col-6 col-lg-4"> 
     <a class="col-12 Boton-Fuente-Chica Boton-Secondary-Relleno" href="{{route('get_admin_team_crear')}}"> 
      Agregar      
     </a>  
    </div>
    @include('admin.team.partes.buscador')
   </div>
 </div>
 <div class="container p-4">
   <div class="row col-12">
     @foreach($Entidades as $Entidad)
          {{--*/ $Mostrar_admin  = true /*--}}
          {{--*/ $Entidad  = $Entidad /*--}}
          {{--*/ $Route    = $Entidad->route_admin /*--}}
          @include('admin.team.partes.lista')
     @endforeach
   </div>
   
 </div>
  

 


  

  
@stop
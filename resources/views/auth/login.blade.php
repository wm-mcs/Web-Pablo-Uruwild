@extends('layouts.user_layout.user_layout')


@section('title')
 Iniciar Sesion 
@stop

@section('MetaContent')
  Entra en.  
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop




@section('content')


 
<div class="col-12 p-5 d-flex align-items-center flex-column   ">
      <h1 class="m-5 text-color-secondary text-center titulos-class">Inicio de sesión</h1> 
      <div class="col-6 d-flex  flex-column align-items-center mb-4 p-2">
      	<img class="img-fluid" src="{{url()}}/imagenes/Empresa/logo-uruwild-horizonatal-color.png"> 
      </div>   
      
      
      @include('formularios.auth.login_form')
        
</div>


  
     

@stop
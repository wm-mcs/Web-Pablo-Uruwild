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


 
<div class="col-12 p-5 d-flex align-items-center flex-column align-items-center  ">
      <h1 class="m-5 text-color-secondary text-center titulos-class">Inicio de sesión</h1>     
      
      @include('formularios.auth.login_form')
        
</div>


  
     

@stop
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


 
<div class="wraper-content-principal-con-nav background-gris-4">
      <h1 class="m-5 text-color-primary text-center titulos-class">Inicio de sesión</h1>     
      
      @include('formularios.auth.login_form')
        
</div>


  
     

@stop
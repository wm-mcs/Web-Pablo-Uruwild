@extends('layouts.user_layout.user_layout')


@section('title')
 Resetear Contraseña  
@stop

@section('MetaContent')
  Resetear Contraseña   
@stop

@section('MetaRobot')
 NOINDEX,FOLLOW
@stop




@section('content')




 <div class="wraper-content-principal-con-nav">
      <h1 class="m-5">Cambiar contraseña</h1>     
      <div class="flex-row-column" style="min-width: 300px;">
        @include('formularios.auth.reset_password_form')
      </div>  
 </div>
     

@stop
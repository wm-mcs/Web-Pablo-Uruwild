@extends('layouts.admin_layout.admin_layout')


@section('miga-de-pan') 
<h1 class="titulos-class  text-color-secondary font-secondary">Crear un miembro del Team</h1>
@stop

@section('content')





 {{-- formulario --}}
  {!! Form::open(['route' => 'set_admin_team_crear',
                            'method'=> 'post',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
    <div class="row p-5">




      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.team.formularios_partes.datos_basicos')
        </div>
      </div>


      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.team.formularios_partes.datos_imagenes')
        </div>
      </div>

      

      
   </div>
   <div class="mt-5 mb-5 Boton-Fuente-Chica Boton-Secondary-Relleno disparar-este-form">
     Crear <i class="fas fa-angle-double-right"></i>
    </div>  

  {!! Form::close() !!}


  

  
@stop
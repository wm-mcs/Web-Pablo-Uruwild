@extends('layouts.admin_layout.admin_layout')


@section('miga-de-pan')   
  <h1 class="titulos-class  text-color-secondary font-secondary">{{$Titulo}}</h1>
@stop

@section('content')



 {{-- formulario --}}
  {!! Form::open(['route' => $Route_crear_post,
                            'method'=> 'post',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="row p-5">

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.'. $Carpeta_view_admin . '.formularios_partes.datos_basicos')
        </div>
      </div>


      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.'. $Carpeta_view_admin . '.formularios_partes.datos_imagenes')
        </div>
      </div>  



      

     
   </div>
   
    <div class="mt-5 mb-5 Boton-Fuente-Chica Boton-Secondary-Relleno disparar-este-form">
     {{$Titulo}} <i class="fas fa-angle-double-right"></i>
    </div> 

  {!! Form::close() !!}


  

  
@stop
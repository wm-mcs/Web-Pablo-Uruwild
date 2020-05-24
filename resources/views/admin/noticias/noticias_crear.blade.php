@extends('layouts.admin_layout.admin_layout')


@section('miga-de-pan')   
  <h1 class="titulos-class  text-color-primary font-secondary">Crear post</h1>
@stop

@section('content')



 {{-- formulario --}}
  {!! Form::open(['route' => 'set_admin_noticias_crear',
                            'method'=> 'post',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="row p-5">

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.noticias.formularios_partes.datos_basicos')
        </div>
      </div>


      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.noticias.formularios_partes.datos_imagenes')
        </div>
      </div>
      <div class="contenedor-grupo-datos col-12">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Contenido del post</div>
        <div class="contenedor-formulario-label-fiel">                       
          <div class="formulario-label-fiel">
            @include('admin.noticias.formularios_partes.aclaracion_etiquetas')
            {!! Form::label('description', 'Contenido', array('class' => 'formulario-label ')) !!}
            {!! Form::textarea('description', null ,['class' => 'formulario-field',
                                                     'rows' => 40 ]) !!}
          </div>
        </div>
      </div>

      

     
   </div>
   
    <div class="mt-5 mb-5 Boton-Fuente-Chica Boton-Primario-Relleno disparar-este-form">
     Crear post <i class="fas fa-angle-double-right"></i>
    </div> 

  {!! Form::close() !!}


  

  
@stop
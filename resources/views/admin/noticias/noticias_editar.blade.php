@extends('layouts.admin_layout.admin_layout')


@section('miga-de-pan')
 

 <h1 class="titulos-class mb-3  text-color-primary font-secondary">Editar</h1>
 <p class="parrafo-class color-text-gris"> Link del post público <i class="fas fa-hand-point-right"></i> <a href="{{$Entidad->route}}"  target="_blank">{{$Entidad->name}}</a></p>
  
@stop

@section('content')



 {{-- formulario --}}
  {!! Form::model($Entidad,   ['route' => ['set_admin_noticias_editar',$Entidad->id],
                            'method'=> 'patch',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="row p-5">

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.noticias.formularios_partes.datos_basicos')
        </div>
      </div>


      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"> Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.noticias.formularios_partes.datos_imagenes')
        </div>
      </div>
      <div class="contenedor-grupo-datos col-12">
        <div class="contenedor-grupo-datos-titulo">Contenido del post</div>
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
     Editar: {{$Entidad->name}}  <i class="fas fa-angle-double-right"></i>
    </div> 

      

      
   
   

  {!! Form::close() !!}

@stop
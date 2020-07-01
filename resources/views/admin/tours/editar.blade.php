@extends('layouts.admin_layout.admin_layout')


@section('miga-de-pan')
 <h1 class="titulos-class mb-3  text-color-secondary font-secondary">Editar</h1> 
 <p class="parrafo-class color-text-gris mb-3"> 
  Link pública <i class="fas fa-hand-point-right"></i> 
  <a href="{{$Entidad->route}}"  target="_blank">{{$Entidad->name}}</a>
 </p>
 <p class="parrafo-class color-text-gris"> 
  Para guardar los cambios deben apretar el botón que está abajo del todo
 </p>
@stop

@section('content')
  {{-- formulario --}}
  {!! Form::model($Entidad,   ['route' => [$Route_editar_post,$Entidad->id],
                               'method'=> 'patch',
                               'files' =>  true,
                               'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="row p-5">
    {{-- datos corporativos --}}
    <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.'.$Carpeta_view_admin.'.formularios_partes.datos_basicos')
        </div>
    </div>
    {{-- imagenes corporativos --}}
    <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"> Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.'.$Carpeta_view_admin.'.formularios_partes.datos_imagenes')
        </div>
    </div>
    <div class="contenedor-grupo-datos col-12">
        <div class="contenedor-grupo-datos-titulo">Contenido </div>
        <div class="contenedor-formulario-label-fiel">                       
          <div class="formulario-label-fiel">
            @include('admin.tours.formularios_partes.aclaracion_etiquetas')
            {!! Form::label('description', 'Contenido', array('class' => 'formulario-label ')) !!}
            {!! Form::textarea('description', null ,['class' => 'formulario-field',
                                                     'rows' => 20 ]) !!}
          </div>
        </div>
    </div>     
  </div>   
  <div class="mt-5 mb-5 Boton-Fuente-Chica Boton-Secondary-Relleno disparar-este-form">
      Guardar cambios   <i class="fas fa-angle-double-right"></i>
  </div> 
  {!! Form::close() !!}
@stop
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

    @if($Entidad->tipo_de_tour == 'tour')
    <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"> Script FlyDreamers</div>
        <div class="contenedor-formulario-label-fiel">
          @include('admin.'.$Carpeta_view_admin.'.formularios_partes.datos_script_externo')
        </div>
    </div>
    @endif



    @include('admin.'. $Carpeta_view_admin . '.formularios_partes.descripcion')


  </div>
  <div class="mt-5 mb-5 Boton-Fuente-Chica Boton-Secondary-Relleno disparar-este-form">
      Guardar cambios   <i class="fas fa-angle-double-right"></i>
  </div>

  <div class="col-12 mt-5">
    <p class="mt-5  color-text-gris">
       <small>
        Borrar para siempre la entidad {{$Entidad->name}}.
        <a href="{{route('delet_tour_actividad_turismo_rural',$Entidad->id)}}" class="confirmar"> Click aquí para borrar de manera definitiva</a>
       </small>
    </p>
  </div>
  {!! Form::close() !!}
@stop

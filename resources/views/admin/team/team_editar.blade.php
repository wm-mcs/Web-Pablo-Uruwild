@extends('layouts.admin_layout.admin_layout')

@section('miga-de-pan') 
 <h1 class="titulos-class mb-3  text-color-primary font-secondary">Editar</h1>
 <p class="parrafo-class color-text-gris"> Link del post público <i class="fas fa-hand-point-right"></i> a {{$Entidad->name}}</p>

 
@stop

@section('content')



  {{-- formulario --}}
  {!! Form::model($Entidad,   ['route' => ['get_admin_team_editar',$Entidad->id],
                            'method'=> 'patch',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
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
     Guardar <i class="fas fa-angle-double-right"></i>
    </div>  
  {!! Form::close() !!}
  
@stop
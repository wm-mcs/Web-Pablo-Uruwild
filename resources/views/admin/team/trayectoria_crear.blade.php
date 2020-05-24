@extends('layouts.admin_layout.admin_layout')


@section('miga-de-pan') 
  {{-- lugar atras --}}
  <a href="{{route('get_admin_trayectorias')}}"><span>Trayectorias</span></a>

  {{-- separador --}}
  <span class="spam-separador">|</span> 

 
  <span>Crear trayectoria</span>
@stop

@section('content')





 {{-- formulario --}}
  {!! Form::open(['route' => 'set_admin_trayectoria_crear',
                            'method'=> 'post',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="formulario-contenedor">




      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Fechas</div>
        <div class="contenedor-formulario-label-fiel">  

          <div class="formulario-label-fiel">
            {!! Form::label('Fecha comienzo', 'Fecha inicio', array('class' => 'formulario-label ')) !!}
            {!! Form::date('fecha_inicio',\Carbon\Carbon::now('America/Montevideo'),      [
                                                                                    'class' => 'formulario-field']) !!}
          </div>       

           <div class="formulario-label-fiel">
            {!! Form::label('Fecha fin', 'Fecha fin', array('class' => 'formulario-label ')) !!}
            {!! Form::date('fecha_fin',\Carbon\Carbon::now('America/Montevideo'),      [
                                                                                    'class' => 'formulario-field']) !!}
          </div>                    
          
        </div>
      </div>

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.trayectoria.formularios_partes.datos_basicos')
        </div>
      </div>

      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.trayectoria.formularios_partes.datos_imagenes')
        </div>
      </div>

      

      
   </div>
   <div class="admin-boton-editar">
     Crear
   </div> 

  {!! Form::close() !!}


  

  
@stop
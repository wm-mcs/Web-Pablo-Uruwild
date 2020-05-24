@extends('layouts.admin_layout.admin_layout')

@section('miga-de-pan') 
  <h1 class="titulos-class  text-color-primary font-secondary">Mis datos</h1>
@stop

@section('content')





 
{!! Form::model($Empresa,['route' => 'set_datos_corporativos',
                                    'method'=> 'PATCH',
                                    'files' =>  true,
                                    'id'    => 'form-admin-empresa-datos',
                                    'class' => 'Helper-OrdenarHijos-columna'
                                  ])               !!}
  <div class="row p-5">

      <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"> Identidad</div>
        <div class="contenedor-formulario-label-fiel">                       
         @include('admin.empresa.formularios_partes.datos_basicos')
        </div>
      </div>
       <div class="contenedor-grupo-datos col-12 col-lg-6">
        <div class="contenedor-grupo-datos-titulo"> Datos de contacto</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.empresa.formularios_partes.datos_contactos')
        </div>
      </div>

      <div class="mt-5 mb-5 Boton-Fuente-Chica Boton-Primario-Relleno disparar-este-form">
     Editar mis datos <i class="fas fa-angle-double-right"></i>
     </div>  
          
  </div>        
{!! Form::close() !!}

  
@stop
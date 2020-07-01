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

      {{--
       P a r a   q u e   s e   c r e e o   t i p o   p r o d u c t o .   T e n e r   e n   c u e n t a   q u e   e n   b a s e   d e   d a t o s   s e   c r e a  c o m o    t o u r   p o r   d e f e c t o  
      --}}
      {!! Form::hidden('tipo_de_tour', 'producto') !!}

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
     {{$Titulo}} <i class="fas fa-angle-double-right"></i>
    </div> 

  {!! Form::close() !!}


  

  
@stop
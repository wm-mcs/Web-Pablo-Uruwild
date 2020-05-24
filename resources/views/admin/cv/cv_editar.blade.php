@extends('layouts.admin_layout.admin_layout')


@section('miga-de-pan')

  
  <span>Editar Cv</span>
@stop



@section('content')





 {{-- formulario --}}
  {!! Form::model($Empresa,   ['route' => 'patch_cv',
                            'method'=> 'patch',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="formulario-contenedor">

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo">Cv</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.cv.formularios_partes.datos_user')
        </div>
      </div>

       {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo">Imagenes</div>
        <div class="contenedor-formulario-label-fiel">                       
            <div class="formulario-label-fiel">
            {!! Form::label('img1', 'Imagen cv 1', array('class' => 'formulario-label ')) !!}
            {!! Form::file('img1',['class' => 'formulario-field']) !!}   
            </div>

            <div class="formulario-label-fiel">
            {!! Form::label('img2', 'Imagen cv 2', array('class' => 'formulario-label ')) !!}
            {!! Form::file('img2',['class' => 'formulario-field']) !!}   
            </div>

            <div class="formulario-label-fiel">
            {!! Form::label('img3', 'Imagen cv 3', array('class' => 'formulario-label ')) !!}
            {!! Form::file('img3',['class' => 'formulario-field']) !!}   
            </div>

            <div class="formulario-label-fiel">
            {!! Form::label('img4', 'Imagen cv 4', array('class' => 'formulario-label ')) !!}
            {!! Form::file('img4',['class' => 'formulario-field']) !!}   
            </div>

            <div class="flex-row-column get_width_100" >
              <img class="admin-img-section-img" src="{{$Empresa->img_cv_patch}}1.jpg">
              <img class="admin-img-section-img" src="{{$Empresa->img_cv_patch}}2.jpg">
              <img class="admin-img-section-img" src="{{$Empresa->img_cv_patch}}3.jpg">
              <img class="admin-img-section-img" src="{{$Empresa->img_cv_patch}}4.jpg">
            </div>

        </div>
      </div>

    
      

      
   </div>
   <div class="admin-boton-editar">
     Editar
   </div> 


  {!! Form::close() !!}


  

  
@stop
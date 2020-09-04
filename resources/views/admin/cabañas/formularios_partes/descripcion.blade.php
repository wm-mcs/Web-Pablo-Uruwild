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

@foreach(config('lenguajes') as $Lenguaje)
  @if($Lenguaje != 'ES')
    <div class="contenedor-grupo-datos col-12">
      <div class="contenedor-grupo-datos-titulo">Contenido {{$Lenguaje}}</div>
      <div class="contenedor-formulario-label-fiel">                       
        <div class="formulario-label-fiel">
          @include('admin.tours.formularios_partes.aclaracion_etiquetas')
          {!! Form::label('description', 'Contenido '.$Lenguaje, array('class' => 'formulario-label ')) !!}
          {!! Form::textarea('description'.$Lenguaje, null ,['class' => 'formulario-field',
                                                   'rows' => 20 ]) !!}
        </div>
      </div>
    </div>  
  @endif
@endforeach  
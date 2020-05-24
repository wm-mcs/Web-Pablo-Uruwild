<div class="formulario-label-fiel">
  @include('admin.noticias.formularios_partes.aclaracion_etiquetas')
  {!! Form::label('cv_text', 'CV', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('cv_text', null ,['class' => 'formulario-field',
                                           'cols'    => '14',
                                           'row'    => '14' ]) !!}
</div>











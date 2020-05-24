<div class="formulario-label-fiel">
  {!! Form::label('name', 'Título', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('descripcion_breve', 'Descripción breve', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('descripcion_breve', null ,['class' => 'formulario-field',
                                                  'rows' => 2, 
                                                  'cols' => 40

  ]) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('tags', 'Tags', array('class' => 'formulario-label ')) !!}
  {!! Form::text('tags', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Desactivar'] , null )          !!}
</div>


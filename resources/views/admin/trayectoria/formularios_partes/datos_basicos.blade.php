<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('link', 'Url (si es que aplica)', array('class' => 'formulario-label ')) !!}
  {!! Form::text('link', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('description', 'Descripción', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('description', null ,['class' => 'formulario-field']) !!}
</div> 

<div class="formulario-label-fiel">
  {!! Form::label('tipo', '¿Experiencia o educación?', array('class' => 'formulario-label ')) !!}
  {!! Form::select('tipo',['experiencia' => 'Experiencia',
                                'educacion'   => 'Educación'] , null )          !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('hasta_hoy', '¿Hasta hoy?', array('class' => 'formulario-label ')) !!}
  {!! Form::select('hasta_hoy',['si' => 'Activo',
                             'no' => 'Inactivo'] , null )          !!}
</div>


<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Inactivo'] , null )          !!}
</div>


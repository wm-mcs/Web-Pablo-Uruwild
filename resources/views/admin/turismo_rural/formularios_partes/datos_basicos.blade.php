<div class="formulario-label-fiel">
  {!! Form::label('name', 'Título', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('cantidad_de_dias', 'Duración en días', array('class' => 'formulario-label ')) !!}
  {!! Form::text('cantidad_de_dias', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('precio', 'Precio por persona', array('class' => 'formulario-label ')) !!}
  {!! Form::text('precio', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('fecha_inicio', 'Fecha del próximo', array('class' => 'formulario-label ')) !!}

  @if(isset($Entidad))
  {!! Form::date('fecha_inicio', $Entidad->fecha ,['class' => 'formulario-field']) !!}
  @else
  {!! Form::date('fecha_inicio', \Carbon\Carbon::now('America/Montevideo') ,['class' => 'formulario-field']) !!}
  @endif
</div>

<div class="formulario-label-fiel">
  {!! Form::label('descripcion_breve', 'Descripción breve', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('descripcion_breve', null ,['class' => 'formulario-field',
                                                  'rows' => 2, 
                                                  'cols' => 25

  ]) !!}
</div>

<div class="formulario-label-fiel">
{!! Form::label('rank', 'Calidad / Rank', array('class' => 'formulario-label ')) !!}
<div class="contiene-aclaracion-label">
  Es para luego poder ordenar o destacar según su relevancia.
</div>
  {!! Form::select('rank',  [1 => '1 - Normal',
                             2 => '2 - Alta ',
                             3 => '3 - Elite'] , null, ['class' => 'formulario-field'] )          !!}
</div>





<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Desactivar'] , null,['class' => 'formulario-field'] )          !!}
</div>




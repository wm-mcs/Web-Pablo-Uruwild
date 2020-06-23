<div class="formulario-label-fiel">
  {!! Form::label('name', 'Título', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('cantidad_de_dias', 'Duración en días', array('class' => 'formulario-label ')) !!}
  {!! Form::text('cantidad_de_dias', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('precio', 'Precio del todo el tour', array('class' => 'formulario-label ')) !!}
  {!! Form::text('precio', null ,['class' => 'formulario-field']) !!}
</div>


{{--
 P a r a   q u e   s e   c r e e o   t i p o   p r o d u c t o .   T e n e r   e n   c u e n t a   q u e   e n   b a s e   d e   d a t o s   s e   c r e a  c o m o    t o u r   p o r   d e f e c t o  
--}}
{{ Form::hidden('tipo_de_tour', 'producto') }}






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
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Desactivar'] , null,['class' => 'formulario-field'] )          !!}
</div>




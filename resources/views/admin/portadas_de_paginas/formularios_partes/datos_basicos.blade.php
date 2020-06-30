

@if(Auth::user()->role == 'adminMcos522')
<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre de página', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>
@else
<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre de página', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class'    => 'formulario-field',
                                'disabled' => 'disabled']) !!}
</div>
@endif

<div class="formulario-label-fiel">
  {!! Form::label('titulo', 'Título', array('class' => 'formulario-label ')) !!}
  {!! Form::text('titulo', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('sub_titulo', 'Sub títtulo', array('class' => 'formulario-label ')) !!}
  {!! Form::text('sub_titulo', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('parrafo', 'Párrafo', array('class' => 'formulario-label ')) !!}
  {!! Form::text('parrafo', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('llamado_a_la_accion', 'Call to action', array('class' => 'formulario-label ')) !!}
  {!! Form::text('llamado_a_la_accion', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('link_llamado_a_la_accion', 'Link call to action', array('class' => 'formulario-label ')) !!}
  {!! Form::text('link_llamado_a_la_accion', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('posicion', 'Posición', array('class' => 'formulario-label ')) !!}
  {!! Form::select('posicion',['left'   => 'Izquierda',
                               'center' => 'Centro',
                               'rigth'  => 'Derecha'] , null,['class' => 'formulario-field'] )          !!}
</div>


<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Desactivar'] , null,['class' => 'formulario-field'] )          !!}
</div>




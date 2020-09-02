

@if(Auth::user()->role == 'adminMcos522')
<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre de página', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>
@else
  
  {!! Form::hidden('name') !!}

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


@foreach(config('lenguajes') as $Lenguaje)
  @if($Lenguaje != 'ES')
      <div class="formulario-label-fiel">
        {!! Form::label('titulo'.$Lenguaje, 'Título'.$Lenguaje, array('class' => 'formulario-label ')) !!}
        {!! Form::text('titulo'.$Lenguaje, null ,['class' => 'formulario-field']) !!}
      </div>

      <div class="formulario-label-fiel">
        {!! Form::label('sub_titulo'.$Lenguaje, 'Sub títtulo'.$Lenguaje, array('class' => 'formulario-label ')) !!}
        {!! Form::text('sub_titulo'.$Lenguaje, null ,['class' => 'formulario-field']) !!}
      </div>

      <div class="formulario-label-fiel">
        {!! Form::label('parrafo'.$Lenguaje, 'Párrafo'.$Lenguaje, array('class' => 'formulario-label ')) !!}
        {!! Form::text('parrafo'.$Lenguaje, null ,['class' => 'formulario-field']) !!}
      </div>

      <div class="formulario-label-fiel">
        {!! Form::label('llamado_a_la_accion'.$Lenguaje, 'Call to action'.$Lenguaje, array('class' => 'formulario-label ')) !!}
        {!! Form::text('llamado_a_la_accion'.$Lenguaje, null ,['class' => 'formulario-field']) !!}
      </div>
  @endif
@endforeach  

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




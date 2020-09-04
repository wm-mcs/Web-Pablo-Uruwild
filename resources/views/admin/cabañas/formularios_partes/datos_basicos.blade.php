<div class="formulario-label-fiel">
  {!! Form::label('name', 'Título', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('descripcion_breve', 'Descripción breve', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('descripcion_breve', null ,['class' => 'formulario-field',
                                                  'rows' => 2, 
                                                  'cols' => 25

  ]) !!}
</div>

@foreach(config('lenguajes') as $Lenguaje)
  @if($Lenguaje != 'ES')
    <div class="formulario-label-fiel">
      {!! Form::label('name'.$Lenguaje, 'Título '.$Lenguaje, array('class' => 'formulario-label ')) !!}
      {!! Form::text('name'.$Lenguaje, null ,['class' => 'formulario-field']) !!}
    </div>

    <div class="formulario-label-fiel">
      {!! Form::label('descripcion_breve'.$Lenguaje, 'Descripción breve ' . $Lenguaje, array('class' => 'formulario-label ')) !!}
      {!! Form::textarea('descripcion_breve'.$Lenguaje, null ,['class' => 'formulario-field',
                                                      'rows' => 2, 
                                                      'cols' => 25

      ]) !!}
    </div> 
  @endif
@endforeach

<div class="formulario-label-fiel">
  {!! Form::label('ubicacion', 'Ubicación', array('class' => 'formulario-label ')) !!}
  {!! Form::text('ubicacion', null ,['class' => 'formulario-field']) !!}
</div>
<div class="formulario-label-fiel">
  {!! Form::label('cantidad_maxima_de_personas', 'Cantidad de personas', array('class' => 'formulario-label ')) !!}
  {!! Form::text('cantidad_maxima_de_personas', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('tags', 'Tags', array('class' => 'formulario-label ')) !!}
  {!! Form::text('tags', null ,['class' => 'formulario-field']) !!}
</div>



<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Desactivar'] , null,['class' => 'formulario-field'] )          !!}
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


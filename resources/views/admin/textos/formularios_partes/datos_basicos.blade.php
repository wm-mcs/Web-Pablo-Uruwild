@if(Auth::user()->role == 'adminMcos522')
<div class="formulario-label-fiel">
  {!! Form::label('pagina', 'Página', array('class' => 'formulario-label ')) !!}
  {!! Form::select('pagina', config('paginas') , null, ['class' => 'formulario-field'] )     !!}   
  
</div>

<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre key', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field']) !!}
</div>
@endif

<div class="formulario-label-fiel">
  {!! Form::label('texto', 'Texto', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('texto', null ,['class' => 'formulario-field',
                                                  'rows' => 2, 
                                                  'cols' => 25

  ]) !!}
</div>




@foreach(config('lenguajes') as $Lenguaje)
  @if($Lenguaje != 'ES')
 

    <div class="formulario-label-fiel">
      {!! Form::label('texto'.$Lenguaje, 'Texto ' . $Lenguaje, array('class' => 'formulario-label ')) !!}
      {!! Form::textarea('texto'.$Lenguaje, null ,['class' => 'formulario-field',
                                                      'rows' => 2, 
                                                      'cols' => 25

      ]) !!}
    </div>

  @endif
@endforeach







<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Desactivar'] , null,['class' => 'formulario-field'] )          !!}
</div>







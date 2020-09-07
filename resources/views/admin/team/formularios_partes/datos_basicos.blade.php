<div class="formulario-label-fiel">
  {!! Form::label('name', 'Nombre', array('class' => 'formulario-label ')) !!}
  {!! Form::text('name', null ,['class' => 'formulario-field', 'placeholder' => '¿Cómo se llama?']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('celular', 'Celular', array('class' => 'formulario-label ')) !!}
  {!! Form::text('celular', null ,['class' => 'formulario-field', 'placeholder' => 'Número de celular']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('cargo', 'Cargo', array('class' => 'formulario-label ')) !!}
  {!! Form::text('cargo', null ,['class' => 'formulario-field', 'placeholder' => 'Ejemplo: CEO']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('descripcion_breve', 'Descripción corta', array('class' => 'formulario-label ')) !!}
  {!! Form::text('descripcion_breve', null ,['class'       => 'formulario-field', 
                                             'placeholder' => 'Describir algo de su personalidad o de lo que hará por el cliente',
                                             'rows'        => 2, 
                                             'cols'        => 25]) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('description', 'Descripción', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('description', null ,['class' => 'formulario-field']) !!}
</div> 

@foreach(config('lenguajes') as $Lenguaje)
  @if($Lenguaje != 'ES')
    <div class="formulario-label-fiel">
      {!! Form::label('cargo'.$Lenguaje, 'Cargo'.$Lenguaje, array('class' => 'formulario-label ')) !!}
      {!! Form::text('cargo'.$Lenguaje, null ,['class' => 'formulario-field', 'placeholder' => 'Ejemplo: CEO']) !!}
    </div>

    <div class="formulario-label-fiel">
      {!! Form::label('descripcion_breve'.$Lenguaje, 'Descripción corta'.$Lenguaje, array('class' => 'formulario-label ')) !!}
      {!! Form::text('descripcion_breve'.$Lenguaje, null ,['class'       => 'formulario-field', 
                                                 'placeholder' => 'Describir algo de su personalidad o de lo que hará por el cliente',
                                                 'rows'        => 2, 
                                                 'cols'        => 25]) !!}
    </div>

    <div class="formulario-label-fiel">
      {!! Form::label('description'.$Lenguaje, 'Descripción'.$Lenguaje, array('class' => 'formulario-label ')) !!}
      {!! Form::textarea('description'.$Lenguaje, null ,['class' => 'formulario-field']) !!}
    </div> 
  @endif
@endforeach  

<div class="formulario-label-fiel">
{!! Form::label('rank', 'Rank', array('class' => 'formulario-label ')) !!}
<div class="contiene-aclaracion-label">
  Es para luego poder ordenar o destacar según su relevancia.
</div>
  {!! Form::select('rank',  [1 => '1 - Normal',
                             2 => '2 - Alta ',
                             3 => '3 - Elite'] , null, ['class' => 'formulario-field'] )          !!}
</div>





<div class="formulario-label-fiel">
  {!! Form::label('facebook', 'Facebook', array('class' => 'formulario-label ')) !!}
  {!! Form::text('facebook', null ,['class' => 'formulario-field', 'placeholder' => 'Poner el link al perfil']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('instagram', 'Instagram', array('class' => 'formulario-label ')) !!}
  {!! Form::text('instagram', null ,['class' => 'formulario-field', 'placeholder' => 'Poner el link al perfil']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('youtube', 'YouTube', array('class' => 'formulario-label ')) !!}
  {!! Form::text('youtube', null ,['class' => 'formulario-field', 'placeholder' => 'Poner el link al canal']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('linkedin', 'LinkedIn', array('class' => 'formulario-label ')) !!}
  {!! Form::text('linkedin', null ,['class' => 'formulario-field', 'placeholder' => 'Poner el link al perfil']) !!}
</div>
<div class="formulario-label-fiel">
  {!! Form::label('whatsapp', 'Whastapp', array('class' => 'formulario-label ')) !!}
  <div class="contiene-aclaracion-label">
  Poner el número sin el símbolo de + pero con todos los caracteres. Ejemplo: el número 099 554 433 sería 59899554433.
  </div>
  {!! Form::text('whatsapp', null ,['class' => 'formulario-field', 'placeholder' => 'Número de celular en formato internacional']) !!}
</div>






<div class="formulario-label-fiel">
  {!! Form::label('estado', 'Estado', array('class' => 'formulario-label ')) !!}
  {!! Form::select('estado',['si' => 'Activo',
                             'no' => 'Inactivo'] , null )          !!}
</div>


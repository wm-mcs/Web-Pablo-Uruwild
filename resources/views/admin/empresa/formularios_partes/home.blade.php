<div class="formulario-label-fiel">
  {!! Form::label('home_titulo', 'Titulo', array('class' => 'formulario-label ')) !!}
  {!! Form::text('home_titulo', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('home_subtitulo', 'Sub titulo', array('class' => 'formulario-label ')) !!}
  {!! Form::text('home_subtitulo', null ,['class' => 'formulario-field'

                                                                        ]) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('home_sobre_mi', 'Sobre mi', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('home_sobre_mi', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('home_sobre_mi_2', 'Sobre mi 2', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('home_sobre_mi_2', null ,['class' => 'formulario-field']) !!}
</div>

<div class="formulario-label-fiel">
  {!! Form::label('home_footer_sobre_mi', 'Footer sobre mi 2', array('class' => 'formulario-label ')) !!}
  {!! Form::textarea('home_footer_sobre_mi', null ,['class' => 'formulario-field']) !!}
</div>


<div class="formulario-label-fiel">
{!! Form::label('home_imagen_portada', 'Imagen portada', array('class' => 'formulario-label ')) !!}
{!! Form::file('home_imagen_portada',['class' => 'formulario-field']) !!}   
</div>


@if($Empresa->imagen_portada_url != null)
 <div class="contiene-img-y-nombre">
   <div class="formulario-label">Imagen portada </div>
   <img class="admin-empresa-img-corporativas" src="{{$Empresa->imagen_portada_url}}">
 </div>
@endif


<div class="formulario-label-fiel">
{!! Form::label('home_imagen_quien_soy', 'Imagen quien soy', array('class' => 'formulario-label ')) !!}
{!! Form::file('home_imagen_quien_soy',['class' => 'formulario-field']) !!}   
</div>


@if($Empresa->imagen_quien_soy_url != null)
 <div class="contiene-img-y-nombre">
   <div class="formulario-label">Imagen sobre mi </div>
   <img class="admin-empresa-img-corporativas" src="{{$Empresa->imagen_quien_soy_url}}">
 </div>
@endif

<div class="formulario-label-fiel">
{!! Form::label('home_imagen_quien_soy2', 'Imagen quien soy 2', array('class' => 'formulario-label ')) !!}
{!! Form::file('home_imagen_quien_soy2',['class' => 'formulario-field']) !!}   
</div>


@if($Empresa->imagen_quien_soy_url2 != null)
 <div class="contiene-img-y-nombre">
   <div class="formulario-label">Imagen sobre mi 2 </div>
   <img class="admin-empresa-img-corporativas" src="{{$Empresa->imagen_quien_soy_url2}}">
 </div>
@endif
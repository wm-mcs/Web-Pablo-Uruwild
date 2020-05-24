
<div class="formulario-label-fiel">
{!! Form::label('img', 'Imagenes', array('class' => 'formulario-label ')) !!}
{!! Form::file('img',['class' => 'formulario-field']) !!}   
</div>


@if(isset($Trayectoria))
 @foreach($Trayectoria->imagenes_de_trayectoria as $Img)
 
 <div class="contiene-img-y-nombre">   
   <img class="admin-empresa-img-corporativas" src="{{ $Img->url_img}}">
 </div>

 @endforeach
@endif











 


 
 

 


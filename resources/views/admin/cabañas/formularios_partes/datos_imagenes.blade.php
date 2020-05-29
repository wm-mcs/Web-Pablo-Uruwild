
<div class="formulario-label-fiel">
{!! Form::label('img', 'Portada', array('class' => 'formulario-label ')) !!}
{!! Form::file('img',['class' => 'formulario-field']) !!}   
</div>

<div class="formulario-label-fiel">
{!! Form::label('img2', 'Imagen Secundaria', array('class' => 'formulario-label ')) !!}
{!! Form::file('img2',['class' => 'formulario-field']) !!}   
</div> 

@if(isset($Entidad))
<div class="row" >

		@if(file_exists($Entidad->path_url_img_portada))
		<img class="admin-img-section-img" src="{{$Entidad->url_img_portada}}">
		@endif  
		@if(file_exists($Entidad->path_url_img_adicional))
		<img class="admin-img-section-img" src="{{$Entidad->url_img_adicional}}">  

		@endif 
		@if(file_exists($Entidad->path_url_img_portada))
		<p class="p-2 mt-4 mb-3 text-center color-text-gris parrafo-class">
		Para copiar la url de la imagen click derecho arriba de la misma y luego "Copiar dirección de la imagen".
		</p>
		@endif
</div>
@endif









 


 
 

 


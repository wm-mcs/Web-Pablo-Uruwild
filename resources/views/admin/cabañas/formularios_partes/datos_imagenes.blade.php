
<div class="formulario-label-fiel">
{!! Form::label('img', 'Imágenes', array('class' => 'formulario-label ')) !!}
{!! Form::file('img[]',['class'            => 'file',
                       'id'                => 'imagenes-field',
                       'multiple'          => true,
                       'data-show-upload'  =>'false',
                       'data-show-caption' => 'true' 
                          ]) !!}   
</div>



@if(isset($Entidad))

	@if($Entidad->imagenes->count() > 0)
	<div class="row col-12 p-3 mt-4" >

		@foreach($Entidad->imagenes as $Imagen)
		 <div class="col-6 col-lg-4">
			<img class="img-fluid" src="{{$Imagen->url_img_chica}}">
		 </div>
		@endforeach

			
	</div>
	@else
	<p class="p-2 mt-4 mb-3 text-center color-text-gris parrafo-class">
			No hay ninguna imagen para esta cabaña. Es necesario que se agregue una lo antes posible.
	</p>
	@endif
@endif









 


 
 

 



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
		 <div class="col-6 mt-3 position-relative img-border-grosor  @if($Imagen->es_imagen_principal) img-principal  @endif ">
			<img class="img-fluid img-cover img-altura-normal" src="{{$Imagen->url_img_chica}}">
			

		    @if($Imagen->es_imagen_principal)
		    <span class="img-element-bottom-left">
		      <i class="fas fa-star"></i>
		    </span>
		    @else
		    <a class="img-element-bottom-left" href="{{$Imagen->establecer_como_principal_route}}">
		      <i class="far fa-star"></i>
		    </a>
		    <a href="{{$Imagen->eliminar_route}}" class="img-element-bottom-right">
			  <i class="fas fa-trash"></i>
		    </a>
		    @endif
		 </div>

		@endforeach

			
	</div>
	@else
	<p class="p-2 mt-4 mb-3 text-center color-text-gris parrafo-class">
			No hay ninguna imagen para esta cabaña. Es necesario que se agregue una lo antes posible.
	</p>
	@endif
@endif









 


 
 

 


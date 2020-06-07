
<div class="formulario-label-fiel">
{!! Form::label('img', 'Imágenes', array('class' => 'formulario-label ')) !!}
<div class="contiene-aclaracion-label">
  Cargar imágenes en formato png (Cuadrado) con fondo transparente. Mínimo 500px x 500px.  
</div>
{!! Form::file('img[]',['class'            => 'formulario-field',                       
                       'multiple'          => true,
                          ]) !!}   
</div>



@if(isset($Entidad))

<p class="p-2 mt-4 mb-3 text-center color-text-gris parrafo-class">
 Administrar imágenes que yá están cargadas <i class="fas fa-hand-point-down"></i> o subir más <i class="fas fa-hand-point-up"></i>.
</p>

	@if($Entidad->imagenes->count() > 0)
	<div class="row  p-3 mt-4" >

		@foreach($Entidad->imagenes as $Imagen)
		<div class="col-6">
			
		
		 <div class="mt-3 position-relative img-border-grosor  @if($Imagen->es_imagen_principal) img-principal  @endif ">
      <img class="img-fluid img-cover img-altura-chica" src="{{$Imagen->url_img}}">   

        @if($Imagen->es_imagen_principal)
        <span class="img-element-bottom-left text-color-primary">
          <i class="fas fa-star"></i>
        </span>
        @else
        <a class="img-element-bottom-left" href="{{$Imagen->cambiar_a_pricnipal_route}}">
          <i class="far fa-star"></i>
        </a>
        <a href="{{$Imagen->eliminar_route}}" class="img-element-bottom-right">
        <i class="fas fa-trash"></i>
        </a>
        @endif
     </div>
		</div>
		@endforeach

			
	
	</div>
	@else
	<p class="p-2 mt-4 mb-3 text-center color-text-gris parrafo-class">
			No hay ninguna imagen para esta cabaña. Es necesario que se agregue una lo antes posible.
	</p>
	@endif
@endif









 


 
 

 


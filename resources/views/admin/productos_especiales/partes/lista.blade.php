


<div class="col-md-6 col-lg-6 mb-4">
    <div class="servicio_lista service">
      <a href="{{$Route}}">
        <img data-src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="actividad_lista_imagen">
      </a>              
      <div class="p-3 mt-2">
        <h3 class="sub-titulos-class   mb-2">
          <a href="{{$Route}}" class="font-primary text-color-secondary">
           {{$Entidad->name}}
          </a>   
          @include('paginas.paginas_personalizadas.partials.editar_icono_desde_user') 

        </h3>
        <p class="color-text-gris mb-2 ">
         <mostrar-mas-o-menos texto="{{$Entidad->descripcion_breve}}" :cantidad_inicial="90" tipo="click-on-element">
           
         </mostrar-mas-o-menos> 
        </p>
        <p>
          <a href="{{$Route}}"> 

            {{--*/ $Key  = 'leer mas' /*--}}
            @include('paginas.paginas_personalizadas.partials.textos')  

            <i class="fas fa-chevron-right"></i></a>
        </p>                
      </div>
    </div>
</div>
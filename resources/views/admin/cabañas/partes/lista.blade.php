{{-- E s t a   e s   l a   v i s t a   p a r a   a d m i n  --}}
@if(isset($Mostrar_admin) && $Mostrar_admin == true)
<div class="col-md-6 col-lg-4 mb-4">
    <div class="servicio_lista service">
      <a href="{{$Route}}">
        <img data-src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="servicio_lista_imagen">
      </a>              
      <div class="p-3 mt-2">
        <p class="mb-3">
          @if($Entidad->estado == 'si')
            <span class="color-text-success">Activo</span>
          @else
            <span class="color-text-gris">Inactivo</span>
          @endif
        </p>  
        <h3 class="sub-titulos-class   mb-2">
          <a href="{{$Route}}" class="font-primary text-color-secondary">
           {{$Entidad->name}}
          </a>                
        </h3>
        <p class="color-text-gris mb-2 ">
         {{$Entidad->descripcion_breve}}
        </p>
        <p>
          <a href="{{$Route}}"> Leer más  <i class="fas fa-chevron-right"></i></a>
        </p>                
      </div>
    </div>
</div>
@else
<div class="col-md-6 col-lg-4 mb-4">
    <div class="servicio_lista service">
      <a href="{{$Route}}">
        <img data-src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve_formateado_con_lenguaje}}" class="servicio_lista_imagen">
      </a>              
      <div class="p-3 mt-2">
        <h3 class="sub-titulos-class   mb-2">
          <a href="{{$Route}}" class="font-primary text-color-secondary">
           {{$Entidad->name_formateado_con_lenguaje}}
          </a>     
          @include('paginas.paginas_personalizadas.partials.editar_icono_desde_user')           
        </h3>
        <p class="color-text-gris mb-2 ">
         {{$Entidad->descripcion_breve_formateado_con_lenguaje}}
        </p>
        <p>
          <a href="{{$Route}}"> {{$Entidad->call_to_action_lista_formateado_con_lenguaje}}  <i class="fas fa-chevron-right"></i></a>
        </p>                
      </div>
    </div>
</div>
@endif
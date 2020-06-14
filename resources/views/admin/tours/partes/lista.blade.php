
{{-- E s t a   e s   l a   v i s t a   p a r a   a d m i n  --}}
@if(isset($Mostrar_admin) && $Mostrar_admin == true)
<div class="col-md-6 col-lg-4 mb-4">
    <div class="servicio_lista service">
      <a href="{{$Route}}">
        <img src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="servicio_lista_imagen">
      </a>              
      <div class="p-3 mt-2">
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
{{--  E s t a   e s   p a r a   e l   p ú b l i c o  --}}
<div class="col-12 col-lg-6 mb-4">
    <div class="servicio_lista service">
      <a href="{{$Route}}">
        <img v-if="!cargando" src="{{$Entidad->url_img_foto_principal}}" alt="{{$Entidad->descripcion_breve}}" class="servicio_lista_imagen">
        <div v-else class="col-12 background-secondary d-flex flex-row align-item-center justify-content-center">
          <div class="cssload-tube-tunnel"></div>
        </div>
      </a>              
      <div class="p-3 mt-2">
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
@endif
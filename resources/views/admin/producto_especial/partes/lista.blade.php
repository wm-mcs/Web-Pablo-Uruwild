
{{-- E s t a   e s   l a   v i s t a   p a r a   a d m i n  --}}
@if(isset($Mostrar_admin) && $Mostrar_admin == true)
<div class="col-md-6 col-lg-4 mb-4">
    <div class="servicio_lista service">
      <a href="{{$Route}}">
        <img data-src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="servicio_lista_imagen">
      </a>
      <div class="p-3 mt-2">
      @if($Entidad->destacado == 'si')
          <p class="mb-1 h4">
            <span class="color-text-success">DESTACADO</span>
          </p>
        @endif
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
        <p class="">
          <a href="{{$Route}}"> Editar  <i class="fas fa-chevron-right"></i></a>
        </p>

      </div>
    </div>
</div>
@else
{{--  E s t a   e s   p a r a   e l   p ú b l i c o  --}}
<div class="col-12 col-lg-6 mb-4 ">
    <div class="servicio_lista service position-relative">

        <img v-if="!cargando" src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="tour-img-listado">
        <div v-else class="col-12 background-secondary d-flex flex-row align-item-center justify-content-center">
          <div class="cssload-tube-tunnel"></div>
        </div>
        <div class="tour-contiene-datos-listado">
          <div class="sub-titulos-class text-bold color-text-white mb-2">
           {{$Entidad->name}}
          </div>

           <div class="parrafo-class color-text-white mb-1">
            Próxima fecha <i class="far fa-clock"></i> {{$Entidad->fecha->format('d-m-Y')}}.
           </div>
           <div class="parrafo-class color-text-white mb-2">
            <b>{{$Entidad->cantidad_de_dias}} </b> días de pura paz.
           </div>
          <p>
          <a href="{{$Route}}"> Explorar contenido   <i class="fas fa-chevron-right"></i></a>
         </p>
        </div>




    </div>
</div>
@endif

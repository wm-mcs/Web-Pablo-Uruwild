 @if($Circuitos->count() > 0)
     <div class="site-section background-gris-1" id="circuitos"> 
    <div class="container">
      <div class="row justify-content-lg-center">
        <div class="col-12 col-lg-9 sub-titulos-class mb-5 text-bold text-color-black text-center">
         Tours de pesca Uruwild
        </div>
      </div>
      <div class="row  justify-content-lg-center mb-0">
        @foreach($Circuitos as $Circuito)
          {{--*/ $Entidad  = $Circuito /*--}}
          {{--*/ $Route    = $Entidad->route /*--}}
          @include('admin.tours.partes.lista')
        @endforeach
        <p class="col-12 col-lg-10   text-center mt-5">
          <a class="Boton-Fuente-Chico Boton-Secondary-Sin-Relleno" href="{{route('get_pagina_tours')}}">Explorar todos los tours <i class="fas fa-chevron-right"></i></a> 
        </p> 
      </div>
    </div>
  </div>
@endif
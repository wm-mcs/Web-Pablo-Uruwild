

<div id="carouselExampleControls" class="carousel slide my-3" data-ride="carousel">
    <div class="carousel-inner">
        {{--*/ $Vuelta = 0 /*--}}  
        @foreach($Entidad->imagenes as $Imagen)
            <div class="carousel-item @if( $Vuelta == 0) active @endif ">
               <img class="d-block w-100" src="{{$Imagen->url_img}}" alt="First slide">
            </div>
            {{--*/ $Vuelta += 1 /*--}}  
        @endforeach 
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

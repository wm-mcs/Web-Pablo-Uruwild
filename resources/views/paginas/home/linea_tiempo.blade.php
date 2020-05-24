


@if($Trayectorias->count() > 0)
 <div class="site-section" id="experiencia-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title text-center mb-5">Experiencia</h2>
          </div>    

          <div class="get_width_100 flex-row-column">
             <div class="time-container">

              @foreach($Trayectorias as $Trayectoria)


              
              
              <div class="timeline-item " date-is="{{$Trayectoria->fecha_inicio_personalizada_formateada}} hasta {{$Trayectoria->se_termino_fecha}}">

                <div class="contenedor-lineas-de-tiempo">
                  <h3>{{$Trayectoria->name}}</h3>
                  <p>
                   {{$Trayectoria->description}}
                  </p>
                  @if($Trayectoria->imagenes_de_trayectoria->count() > 0)
                  <div class="contiene-linea-de-tiempo-img">
                    @foreach($Trayectoria->imagenes_de_trayectoria as $img)
                    @if($Trayectoria->link != '')
                      <a href="{{$Trayectoria->link}}"><img data-src="{{$img->url_img}}" class="img-linea-de-tiempo"></a>
                    @else
                      <img data-src="{{$img->url_img}}" class="img-linea-de-tiempo">
                    @endif  
                    @endforeach
                  </div>
                  @endif
                </div>
                
              </div>
              
              @endforeach
              
            </div>
          
          </div>      
         
          
        </div>
      </div>
    </div>
@endif
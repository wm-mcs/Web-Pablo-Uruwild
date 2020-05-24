


@if($Educacion->count() > 0)
 <div class="site-section" id="time-line-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title text-center mb-5">Educación</h2>
          </div>    

          <div class="get_width_100 flex-row-column">
             <div class="time-container">

              @foreach($Educacion as $Trayectoria)


              
              
              <div class="timeline-item " date-is="{{$Trayectoria->fecha_inicio_personalizada_formateada}} hasta {{$Trayectoria->se_termino_fecha}}">

                <div class="contenedor-lineas-de-tiempo">
                  <h3>{{$Trayectoria->name}}</h3>
                  <p>
                   {{$Trayectoria->description}}
                  </p>
                  @if($Trayectoria->imagenes_de_trayectoria->count() > 0)
                  <div class="contiene-linea-de-tiempo-img">
                    @foreach($Trayectoria->imagenes_de_trayectoria as $img)
                      <img data-src="{{$img->url_img}}" class="img-linea-de-tiempo">
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
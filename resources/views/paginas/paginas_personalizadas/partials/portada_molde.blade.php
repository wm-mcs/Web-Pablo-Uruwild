{{-- Se necesita asignar la variable $Portada y $Route. Si $Route no se quiere definir se le dará valor "" (string vacio) y toamara el link que viene del objeto portada y se usara scrool_to en el llamado a la acción --}}

<div @if(isset($EsPortada) && $EsPortada == true) v-if="scrolled" @endif class="site-blocks-cover overlay bg-light" id="circuitos">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
        <div class="row @if($Portada->posicion == 'left') @elseif($Portada->posicion == 'center') justify-content-center text-center @else justify-content-end text-right @endif">
          <div class="col-lg-8 " style="max-width: 550px;">
            <h1  class="titulos-class text-white font-secondary mb-3">{{$Portada->titulo}}</h1>
            @if($Portada->sub_titulo != '')
            <h2 class="sub-titulos-class text-white no-mostrar-en-mobil mb-3">{{$Portada->sub_titulo}}
            </h2>
            @endif
            @if($Portada->parrafo != '')
            <p class="text-white no-mostrar-en-mobil mb-3">{{$Portada->parrafo}}
            </p>
            @endif 
            @if($Route == '')
            {
               <p class="mt-3"><a href="{{$Portada->link_llamado_a_la_accion}}" class="scroll_to Boton-Fuente-Chico Boton-Blanco"> {{$Portada->llamado_a_la_accion}} <i class="fas fa-chevron-right"></i> </a></p>
            }  
            @else
            {
              <p class="mt-3"><a href="{{$Route}}" class=" Boton-Fuente-Chico Boton-Blanco"> {{$Portada->llamado_a_la_accion}} <i class="fas fa-chevron-right"></i> </a></p>
            }   
            @endif  
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <img v-if="mostrar_para_celuar" class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$Portada->url_img_foto_principal_chica}}" alt="{{$Portada->titulo}} -{{$Portada->sub_titulo}} -  {{$Portada->parrafo}}  Uruwild.">
  <img v-else class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$Portada->url_img_foto_principal}}" alt="{{$Portada->titulo}} - {{$Portada->sub_titulo}} -  {{$Portada->parrafo}} Uruwild.">  
</div> 
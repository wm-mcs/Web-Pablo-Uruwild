@extends('layouts.paginasPersonalizadas.layout')

{{--*/ $ImagenPortadaChica    = $Portada->url_img_foto_principal_chica /*--}}
{{--*/ $ImagenPortada         = $Portada->url_img_foto_principal /*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo-para-tags.jpg '/*--}}
{{--*/ $Titulo                = 'Sobre Uruwild' /*--}}
{{--*/ $DescriptionEtiqueta   = '' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_quien_es') /*--}}

@section('favicon')
 <link rel="shortcut icon" href="{{ asset('imagenes/Favicon/favicon.ico') }}"> 
@stop

@section('og-tags')
 <meta property="og:type"               content="website" />
 <meta property="og:title"              content="{{ $Titulo}} " />
 <meta property="og:description"        content="{{$DescriptionEtiqueta}}" />
 <meta property="og:image"              content="{{$ImagenParaTaG }}" />
 <meta property="og:image:secure_url"   content="{{$ImagenParaTaG }}" /> 
 <meta property="og:image:width"        content="250">
 <meta property="og:image:height"       content="250">
@stop 

@section('pixcel-facebook')
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '211354400244020');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=211354400244020&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

@stop

@section('data-estructurada')

 <script type="application/ld+json">
        {
         "@context": "http://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "{{$UrlDeLaPagina}}",
            "name": "{{$Titulo}}"
            }
          }          
         ]
        }
</script>


@stop




@section('title')
   {{$Titulo}}
@stop


@section('MetaContent')
      {{$DescriptionEtiqueta}}
@stop

@section('MetaRobot')
 index,follow
@stop

@section('palabras-claves')
{{$PalabrasClaves}}
@stop


@section('vue')
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
	@include('paginas.paginas_personalizadas.Header.Header_principal')
@stop

@section('footer')
	@include('paginas.paginas_personalizadas.Footer.Footer_principal')
@stop



@section('portada')
  {{--*/  $Portada   =  $Portada /*--}}
  {{--*/  $Route     = '' /*--}}
  {{--*/  $EsPortada = true /*--}}
  @include('paginas.paginas_personalizadas.partials.portada_molde') 
@stop

@section('contenido')

 <div class="site-section background-gris-4" id="sobre">
    <div class="container">
      <h2 class="mb-4 sub-titulos-class text-center text-color-primary text-bold">
        HAS LLEGADO HASTA AQUÍ POR ALGO.
      </h2> 
      <p class="text-center text-color-primary m-0">        
       ¿Pesca profesional? ¿Actividades al aire libre? ¿Fin de semana de paz en el medio del campo?.
      </p>   
      
    </div>
  </div>



  <div  class="site-section" id="sobre-mi">
      <div class="container">
        <div class="row align-items-center border border-primary p-5 mb-4">

          <h2 class="col-12 titulos-class  text-center text-color-secondary mb-2 font-primary">¿Qué es Uruwild?</h2>
          <h3 class="col-12 text-color-primary text-bold sub-titulos-class text-center text-uppercase mb-5">Tours de pesca. Turismo rural. Actividades al aire libre.</h3>
         

          <div class="row align-items-center ">
           <div class="col-lg-6 order-2 order-lg-2 flex-column p-4">          
              
            <p class="mb-0 text-color-secondary"> <b>¿Qué es Uruwild?</b> </p>
            <p class="parrafo-class mb3">
             <strong>Uruwild es un emprendimiento turístico vinculado a la recreación y al esparcimiento en ambientes naturales únicos del Uruguay</strong> . Somos un equipo joven multidisciplinario, capacitados y formados en diversas áreas, y tenemos como objetivo común acercar experiencias auténticas para vivir y disfrutar de la magia y la naturaleza del Uruguay.             
            </p>

            <p class="mb-0 text-color-secondary"> <b>Nuestra misión:</b> </p>
            <p class="parrafo-class mb-3">
            Nuestro objetivo es acercar diferentes propuestas, productos y actividades al aire libre para invitar a conocer, revalorizar y redescubrir el Uruguay de una forma diferente. Seleccionamos y acercamos un abanico de propuestas al aire libre contemplando particularmente siempre el valor y las aptitudes naturales y paisajísticas de cada lugar.
             
            </p>

            <p class="mb-0 text-color-secondary"> <b>Nuestra visión</b> </p>
            <p class="parrafo-class m-0">
             Nos apasiona profundamente la naturaleza y cada una de sus manifestaciones. Creemos que el vínculo armonioso y respetuoso entre el hombre y la naturaleza nos convierte en mejores personas. Interpretamos a la naturaleza es un gran escenario que nos invita a descubrirla y a descubrirnos y estamos convencidos que este acercamiento genera un efecto saludable y una actitud de respeto hacia la vida; indispensable para un futuro sostenible y sensible ante la preservación.
             
            </p>
           
           
                
             
           </div>
           <div class="col-lg-6 order-3 pl-lg-5 order-lg-1">
            <img v-if="mostrar_para_celuar" class="img-fluid mb-4" data-src="{{url()}}/imagenes/Quien/sobre-uruwild-chica.jpg" alt="Uruwild es un emprendimiento turístico vinculado a la recreación y al esparcimiento en ambientes naturales únicos del Uruguay. Somos un equipo joven multidisciplinario, capacitados y formados en diversas áreas, que en su conjunto buscamos ofrecer experiencias auténticas motivadas. ">
            <img v-else class="img-fluid mb-4" data-src="{{url()}}/imagenes/Quien/sobre-uruwild.jpg" alt="Uruwild es un emprendimiento turístico vinculado a la recreación y al esparcimiento en ambientes naturales únicos del Uruguay. Somos un equipo joven multidisciplinario, capacitados y formados en diversas áreas, que en su conjunto buscamos ofrecer experiencias auténticas motivadas. ">
           </div>
            
          </div>         
         
        </div>
         <a href="{{route('get_pagina_tours')}}" class="Boton-Fuente-Chica Boton-Primario-Relleno "> Explorar los tours de pesca <i class="fas fa-fish"></i>
             </a>
      </div>
</div>





 <div class="site-section background-gris-1"> 
    <div class="container">
      <div class="row">
        <div class="col-12 sub-titulos-class mb-4 text-bold text-color-black text-center">
          El team de Uruwild <i class="fas fa-hand-point-down"></i>
        </div>

      </div>
      <div class="row d-flex justify-content-center">

        @foreach($Teams as $Entidad)
          {{--*/ $Entidad  = $Entidad /*--}}
          {{--*/ $Route    = $Entidad->route /*--}}
          @include('admin.team.partes.lista_quienes_somos')
        @endforeach
      </div>      
    </div>
  </div>

  


      



   
      
   
 

    



    




    

    

   


   

    

   

@stop
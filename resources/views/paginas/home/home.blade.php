@extends('layouts.credo.layout_pricnipal')



{{--*/ $ImagenPortada         = url() . '/imagenes/PaginasPersonalizadas/pagina-web-prefesionales.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/mauricio-costanzo-desarrollador-prgramador.jpg'/*--}}
{{--*/ $Titulo                = 'Mauricio Costanzo | desarrollador de páginas webs ' /*--}}
{{--*/ $DescriptionEtiqueta   = 'Creo páginas webs. Te daré consejos de cómo hacer para qué te encuentren en internet. 
 ' /*--}}
{{--*/ $PalabrasClaves        = 'desarrollador web, programador web, diseñador de paginas web, diseño de webs, paginas webs' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}
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
  fbq('init', '632331500665350');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=632331500665350&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

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
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
<div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">Sobre mi</a></li>
                <li><a href="#services-section" class="nav-link">Servicios</a></li>
              </ul>
            </nav>
          </div>

        

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#experiencia-section" class="nav-link">Experiencia</a></li>
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#contact-section" class="nav-link">Contacto</a></li>
                @if(!Auth::guest())
                  <li><a href="{{route('get_datos_corporativos')}}" class="nav-link">Administrar</a></li>
                  <li><a href="{{route('logout')}}" class="nav-link">Salir</a></li>
                @endif
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
@stop


@section('contenido')
    <div class="site-blocks-cover overlay bg-light" id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-4">
                <h1 v-if="se_muestra(empresa.home_titulo)" class="text-white">Mauricio</h1>
                <p class="text-secondary">Desarrollador web</p>
                <p v-if="se_muestra(empresa.home_subtitulo)" class="lead">@{{empresa.home_subtitulo}}</p>
                <p><a href="#contact-section" class="btn smoothscroll btn-primary">Contactarme</a></p>
              </div>
            </div>
          </div>
            
        </div>
      </div>

      
      
      <img class="post-img-slider-size Slider_cabecer_img" style="position: absolute;top: 0;":src="empresa.imagen_portada_url" alt="Mauricio Costanzo desarrollador de aplicaciones web"> 
      
    </div>  

   



    <div  class="site-section" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title">Sobre mi</h2>
          </div>
          <div class="col-lg-6 order-2 order-lg-1">

          

          <p>Mi nombre es Mauricio Costanzo creé en Octubre 2007  <a href="https://worldmaster.com.uy/"> <strong>worldmaster.com.uy</strong> </a> . En ese momento mi educación pasaba por el lado de las ciencias económicas y el marketing, por esa razón tenía que contratar a  empresas para que me desarrollaran mis ideas.   
          </p>
          <p>Un día me hice está pregunta “ <strong>¿Qué tan difícil es poner estas ideas en código?</strong> ” la búsqueda de esa respuesta me hizo prácticamente obsesionarme por entender cómo desarrollar una página web. Estuve un año y unos meses adquiriendo conocimientos hasta que me decidí hacer una versión de la web de worldmaster.com.uy por mi cuenta y desde cero.
          </p>         
          <p>Hace un tiempo me dedico a <a href="{{route('get_pagina_de_web_profesionales')}}"><strong>desarrollar webs</strong></a>  y recientemente creé <a href="{{route('get_programa_para_gestionar_gimancios')}}">   <strong>Easysocio</strong> </a> , una web app para que gimnasios, academias e institutos puedan administrar sus negocios de forma simple y rápida.
          </p>
          <p><strong>Me gusta ordenar las ideas, dar una prioridad, diseñar un plan e ir por ello</strong>. ¿Tienes algún desafío o idea?  <a href="#contact-section"> <strong>contáctame</strong> </a>  .
          </p>       


            
            
            
          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">


            <img class="img-fluid mb-4 helper-border-radius-16" :src="empresa.imagen_quien_soy_url" alt="Image">

           

                    
           
          </div>
          
        </div>
      </div>
    </div>

    @include('paginas.home.home_como_te_ayudo') 
    @include('paginas.home.linea_tiempo')
    @include('paginas.home.Educacion') 

    

    

   


   

    

    <section v-if="blogs.length" class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Blog</h2>
          </div>

           <blog-list-component v-for="blog in blogs" :empresa="empresa" :blog="blog" :key="blog.id" ></blog-list-component>

           

        </div>
      </div>
    </section>

@stop  



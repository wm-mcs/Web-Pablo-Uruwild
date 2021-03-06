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
  @include('paginas.home.vue.Helpers.mostrar-mas-o-menos')
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

 <div class="site-section background-gris-4 " id="sobre">
    <div class="container">
      <h2 class="mb-4 sub-titulos-class text-center text-color-primary text-bold">
        {{--*/ $Key  = 'sobre uruwild first title' /*--}}
        @include('paginas.paginas_personalizadas.partials.textos')
      </h2>
      <p class="text-center text-color-primary m-0">
        {{--*/ $Key  = 'sobre uruwild empatia' /*--}}
        @include('paginas.paginas_personalizadas.partials.textos')

      </p>

    </div>
  </div>



  <div  class="site-section " id="sobre-mi">
      <div class="container">
        <div class="row align-items-center border border-primary p-5 mb-4">

          <h2 class="col-12 titulos-class  text-center text-color-secondary mb-2 font-primary">
            {{--*/ $Key  = 'sobre uruwild titulo contenido' /*--}}
            @include('paginas.paginas_personalizadas.partials.textos')
          </h2>
          <h3 class="col-12 text-color-primary text-bold sub-titulos-class text-center text-uppercase mb-5">

            {{--*/ $Key  = 'sobre uruwild sub titulo contenido' /*--}}
            @include('paginas.paginas_personalizadas.partials.textos')


          </h3>


          <div class="row align-items-center ">
           <div class="col-lg-6 order-2 order-lg-2 flex-column p-4">



             {{--*/ $Key  = 'sobre uruwild contenido' /*--}}
             @include('paginas.paginas_personalizadas.partials.textos')




           </div>
           <div class="col-lg-6 order-3 pl-lg-5 order-lg-1">
            <img v-if="mostrar_para_celuar" class="img-fluid mb-4" data-src="{{url()}}/imagenes/Quien/sobre-uruwild-chica.jpg" alt="Uruwild es un emprendimiento turístico vinculado a la recreación y al esparcimiento en ambientes naturales únicos del Uruguay. Somos un equipo joven multidisciplinario, capacitados y formados en diversas áreas, que en su conjunto buscamos ofrecer experiencias auténticas motivadas. ">
            <img v-else class="img-fluid mb-4" data-src="{{url()}}/imagenes/Quien/sobre-uruwild.jpg" alt="Uruwild es un emprendimiento turístico vinculado a la recreación y al esparcimiento en ambientes naturales únicos del Uruguay. Somos un equipo joven multidisciplinario, capacitados y formados en diversas áreas, que en su conjunto buscamos ofrecer experiencias auténticas motivadas. ">
           </div>

          </div>

        </div>
         <a href="{{route('get_pagina_tours')}}" class="Boton-Fuente-Chica Boton-Primario-Relleno ">

           {{--*/ $Key  = 'sobre uruwild llamado a la accion' /*--}}
           @include('paginas.paginas_personalizadas.partials.textos')
           <i class="fas fa-fish"></i>

         </a>
      </div>
</div>





 <div class="site-section background-gris-1 ">
    <div class="container">
      <div class="row">
        <div class="col-12 sub-titulos-class mb-4 text-bold text-color-black text-center">
         {{--*/ $Key  = 'sobre uruwild team' /*--}}
           @include('paginas.paginas_personalizadas.partials.textos')  <i class="fas fa-hand-point-down"></i>
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

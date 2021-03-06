@extends('layouts.paginasPersonalizadas.layout')



{{--*/ $ImagenPortadaChica    = $Portada->url_img_foto_principal_chica /*--}}
{{--*/ $ImagenPortada         = $Portada->url_img_foto_principal /*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo-para-tags.jpg '/*--}}
{{--*/ $Titulo                = 'Uruwild' /*--}}
{{--*/ $DescriptionEtiqueta   = '' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}


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
{{--*/ $ScrollSnap  = true /*--}}
	@include('paginas.paginas_personalizadas.Footer.Footer_principal')
@stop



@section('portada')
  {{--*/  $Portada   =  $Portada /*--}}
  {{--*/  $Route     = '' /*--}}
  {{--*/ $EsPortada  = true /*--}}
  {{--*/ $ScrollSnap  = true /*--}}


  @include('paginas.paginas_personalizadas.partials.portada_molde')
@stop



@section('contenido')

<div  class="site-blocks-cover overlay  scroll-snap " >
<div class="container">



      <div class="col-12 d-flex flex-column align-items-center my-5">

          <div class="next-scroll">

          </div>
        </div>
     </div>


  <img class="imagen-portada-altura-100vh" style="position: absolute;top: 0; z-index:-2;" data-src="{{url()}}/imagenes/Backgrounds/garza-colorada.jpg" alt="">

</div>




  @include('paginas.paginas_personalizadas.home.tour_nuevo')

  {{-- I m a g e n   d e   p e s c a  --}}
  {{-- <div  class="background_img background_img_fixed home-pesca"></div>--}}

  @include('paginas.paginas_personalizadas.home.ecoturismo')

  @if(!Auth::guest())
  @if(Auth::user()->first_name = 'Mauricio')

  @endif
  @endif



  {{-- I m a g e n   d e  a c t i v i d a d e s  --}}
  {{-- <div class="background_img background_img_fixed home-actividades"></div> --}}


  @include('paginas.paginas_personalizadas.home.turismo_rural')

  <span id="circuitos"></span>
  <div class="site-section scroll-snap standar-scroll background-gris-1">
    <div class="container">
      <div class="row">
        <div class="col-12 titulos-class mb-5 text-bold text-color-black text-center ">
          {{--*/ $Key  = 'titulo seccion estancias y lodges' /*--}}
          @include('paginas.paginas_personalizadas.partials.textos')
          <i class="fab fa-hotjar"></i>
        </div>


      </div>
      <div class="row">

        @foreach($Destacados as $Destacado)
          {{--*/ $Entidad  = $Destacado /*--}}
          {{--*/ $Route    = $Entidad->route /*--}}
          @include('admin.productos_especiales.partes.lista')
        @endforeach

        <p class="col-12 col-lg-10   text-center mt-5 mx-auto">
         <a class="Boton-Fuente-Chico Boton-Secondary-Sin-Relleno" href="{{route('get_pagina_destacados',Session::get('lenguaje'))}}">
           {{--*/ $Key  = 'boton seccion estancias y lodges' /*--}}
           @include('paginas.paginas_personalizadas.partials.textos')

           <i class="fas fa-chevron-right"></i>
         </a>
        </p>
      </div>
    </div>
  </div>

  <div class="site-section scroll-snap">
    <div class="container">
      <div class="row">
        <div class="col-12 sub-titulos-class mb-4 text-bold text-color-black text-center">
           {{--*/ $Key  = 'titulo seccion el equipo de uruwild' /*--}}
           @include('paginas.paginas_personalizadas.partials.textos')

          <i class="fas fa-hand-point-down"></i>
        </div>

      </div>
      <div class="row d-flex justify-content-center">

        @foreach($Teams as $Entidad)
          {{--*/ $Entidad  = $Entidad /*--}}
          {{--*/ $Route    = $Entidad->route /*--}}
          @include('admin.team.partes.lista')
        @endforeach
      </div>
    </div>
  </div>


@stop

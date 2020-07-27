@extends('layouts.paginasPersonalizadas.layout')



{{--*/ $ImagenPortadaChica    = $Portada->url_img_foto_principal_chica /*--}}
{{--*/ $ImagenPortada         = $Portada->url_img_foto_principal /*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo-para-tags.jpg '/*--}}
{{--*/ $Titulo                = 'Tours' /*--}}
{{--*/ $DescriptionEtiqueta   = '' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_tours') /*--}}


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
  @include('paginas.paginas_personalizadas.Footer.Footer_principal')
@stop



@section('portada')

  {{--*/  $Portada   =  $Portada /*--}}
  {{--*/  $Route     = '' /*--}}
  {{--*/ $EsPortada  = true /*--}}
  @include('paginas.paginas_personalizadas.partials.portada_molde') 


@stop



@section('contenido')

  

  @if(!Auth::guest())
  @if(Auth::user()->first_name = 'Mauricio')


  
  @endif
  @endif

  <div class="site-section background-gris-0" > 
    <div class="container">
      <div class="row p-3 p-lg-5">
        <p class="col-12  text-center">
           <b>¿Pescador profesional? ¿Buscás nuevos rincones para explorar? </b> Estos Torus son para ti. Guiádos por expertos de la pesca y la naturaleza. Mirá los paquetes y entenderás de que hablo <i class="fas fa-hand-point-down"></i> 
        </p>
      </div>     
    </div>
  </div>
 





  @if($Tours->count() > 0)
  {{-- Aquí poner contendio para probar --}}
   <div class="site-section background-gris-1" id="tours"> 
    <div class="container">
      <div class="row justify-content-lg-center">
        <div class="col-12 col-lg-9 sub-titulos-class mb-5 text-bold text-color-black text-center">
          Circuítos de pesca profesional por le rio Uruguay guiádos por expertos. 
        </div>
      </div>
      <div class="row justify-content-lg-center">
        @foreach($Tours as $Circuito)
          {{--*/ $Entidad  = $Circuito /*--}}
          {{--*/ $Route    = $Entidad->route /*--}}
          @include('admin.tours.partes.lista')
        @endforeach
      </div>      
    </div>
  </div>
  @endif

 


    

    

   


   

    

   

@stop

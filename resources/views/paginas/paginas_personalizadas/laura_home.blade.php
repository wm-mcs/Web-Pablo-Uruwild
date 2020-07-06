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
	@include('paginas.paginas_personalizadas.Footer.Footer_principal')
@stop



@section('portada')

    <div class="site-blocks-cover overlay bg-light" id="home-section">
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
           
                <p class="mt-3"><a href="{{$Portada->link_llamado_a_la_accion}}" class="scroll_to Boton-Fuente-Chico Boton-Blanco"> {{$Portada->llamado_a_la_accion}} <i class="fas fa-chevron-right"></i> </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <img v-if="mostrar_para_celuar" class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$ImagenPortadaChica}}" alt="{{$Portada->titulo}} -{{$Portada->sub_titulo}} -  {{$Portada->parrafo}}  Uruwild.">
      <img v-else class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="{{$Portada->titulo}} - {{$Portada->sub_titulo}} -  {{$Portada->parrafo}} Uruwild.">
       

    </div>  



@stop



@section('contenido')

   <div class="site-section background-primary" id="circuitos"> 
    <div class="container">
      <p class="text-center p-2 p-lg-5 text-white">
        Uruwild es un emprendimiento turístico vinculado a la recreación y al esparcimiento en ambientes naturales únicos del Uruguay. Hacemos  <a class="text-white scroll_to" href="#circuitos">tours de pesca</a>,  <a class="text-white scroll_to" href="#ecoturismo">actividades de ecoturismo</a> y <a class="text-white scroll_to" href="#Turismo">turismo rural</a>. 
      </p>
     </div> 
    </div>
  </div>



  



  @if($Circuitos->count() > 0)
  {{-- Aquí poner contendio para probar --}}
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

  {{-- I m a g e n   d e   p e s c a  --}}
  <div v-if="mostrar_para_celuar"class="background_img background_img_fixed home-pesca-chica"></div>
  <div v-else class="background_img background_img_fixed home-pesca"></div>
  @if($Productos->count() > 0)
   {{-- Aquí poner contendio para probar --}}
   <div class="site-section background-gris-0" id="ecoturismo"> 
    <div class="container">
      <div class="row">
        <div class="col-12 sub-titulos-class mb-4 text-bold text-color-black text-center text-lg-left">
          Naturaleza y ecoturismo  
        </div>
      </div>
      <div class="row  mb-0">
        @foreach($Productos as $Producto)
          {{--*/ $Entidad  = $Producto /*--}}
          {{--*/ $Route    = $Entidad->route /*--}}
          @include('admin.producto_especial.partes.lista')
        @endforeach  
        <p class="col-12 col-lg-10   text-center mt-5 mx-auto">
         <a class="Boton-Fuente-Chico Boton-Secondary-Sin-Relleno" href="{{route('get_pagina_productos')}}">Explorar todas las actividades Wilds <i class="fas fa-chevron-right"></i></a> 
        </p>     
      </div>  
    </div>        
   </div>
  @endif


    
  {{-- I m a g e n   d e   a c t i v i d a d e s  --}}
  <div v-if="mostrar_para_celuar"class="background_img background_img_fixed home-actividades-chica"></div>
  <div v-else class="background_img background_img_fixed home-actividades"></div>



  @if(!Auth::guest())
  @if(Auth::user()->first_name = 'Mauricio')  

   @if($Turismo_rural->count() > 0)
    {{-- Aquí poner contendio para probar --}}
     <div class="site-section background-gris-0" id="Turismo"> 
      <div class="container">
        <div class="row justify-content-lg-center">
          <div class="col-12 col-lg-9 sub-titulos-class mb-5 text-bold text-color-black text-center">
            Turismo rural
          </div>

        </div>
        <div class="row  justify-content-lg-center">
          @foreach($Turismo_rural as $Entidad)
            {{--*/ $Entidad  = $Entidad /*--}}
            {{--*/ $Route    = $Entidad->route /*--}}
            @include('admin.turismo_rural.partes.lista')
          @endforeach

          <p class="col-12 col-lg-10   text-center mt-5">
            <a class="Boton-Fuente-Chico Boton-Secondary-Sin-Relleno" href="{{route('get_pagina_turismo_rural')}}">Explorá toda la sección de turismo rural <i class="fas fa-chevron-right"></i></a> 
          </p> 
        </div> 
      </div>
    </div>
    @endif
  
  @endif
  @endif


  <div class="site-section background-gris-1"> 
    <div class="container">
      <div class="row">
        <div class="col-12 sub-titulos-class mb-4 text-bold text-color-black text-center text-lg-left">
          Estancias y Lodges
        </div>

      </div>
      <div class="row">

        @foreach($Cabañas as $Cabaña)
          {{--*/ $Entidad  = $Cabaña /*--}}
          {{--*/ $Route    = $Entidad->route /*--}}
          @include('admin.cabañas.partes.lista')
        @endforeach

        <p class="col-12 col-lg-10   text-center mt-5 mx-auto">
         <a class="Boton-Fuente-Chico Boton-Secondary-Sin-Relleno" href="{{route('get_pagina_cabañas')}}">Explorar todas las cabañas <i class="fas fa-chevron-right"></i></a> 
        </p> 
      </div>      
    </div>
  </div>

  <div class="site-section "> 
    <div class="container">
      <div class="row">
        <div class="col-12 sub-titulos-class mb-4 text-bold text-color-black text-center">
          Los guías de pesca ninjas de Uruwild <i class="fas fa-hand-point-down"></i>
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

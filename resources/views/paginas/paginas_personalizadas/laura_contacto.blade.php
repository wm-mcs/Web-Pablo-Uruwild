@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortadaChica    = $Portada->url_img_foto_principal_chica /*--}}
{{--*/ $ImagenPortada         = $Portada->url_img_foto_principal /*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo-para-tags.jpg '/*--}}
{{--*/ $Titulo                = 'Contacto' /*--}}
{{--*/ $DescriptionEtiqueta   = 'Contactate con Uruwild' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_contacto') /*--}}


@section('favicon')
<link rel="shortcut icon" href="{{ asset('imagenes/favicon-easy.ico') }}"> 
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
  @include('paginas.home.vue.contacto-component')  
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
	@include('paginas.paginas_personalizadas.Header.Header_principal')
@stop

@section('footer')
	{{-- @include('paginas.paginas_personalizadas.Footer.Footer_principal') --}}
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
  <img v-if="mostrar_para_celuar" class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$ImagenPortadaChica}}" alt="Uruwild.">
  <img v-else class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="Uruwild.">
</div> 
@stop

@section('contenido')

  

  <div  class="site-section" id="contactar">
      <div class="container">
        <div class="d-flex  flex-column align-items-center justify-content-center">         
          <div class="col-6 mb-3 mt-3 d-flex flex-row justify-content-center align-items-center ">
            <img src="{{$Teams[0]->url_img_foto_principal_chica}}" 
               class="imagen-team-pagina-contacto-chica">
          </div>
          <div class="col-8 col-lg-5  mb-5">
            <p class="text-center color-text-gris">              
                Para contactarte rellenar el formulario de aquí abajo <i class="fas fa-hand-point-down"></i>. Hay un equipo de ninjas de la atención comercial listos para atenderte.                             
            </p>
          </div>
          <div class="col-lg-6  " id="formulario_contacto">
               <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
                  @include('paginas.home.vue.Contacto.Contacto_comun')                                
               </contacto-component>
          </div>
        </div>
      </div>
    </div>

      




    




    

    

   


   

    

   

@stop
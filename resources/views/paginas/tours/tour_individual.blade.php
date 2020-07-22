@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = $Tour->url_img_foto_principal /*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo-para-tags.jpg'/*--}}
{{--*/ $Titulo                = $Tour->name /*--}}
{{--*/ $DescriptionEtiqueta   = $Tour->descripcion_breve /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = $Tour->route /*--}}


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
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
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
            <div class="row ">
              <div class="col-lg-8 p-lg-5 background-black-transparent " style="max-width: 550px;">
                <h1  class="titulos-class text-white font-secondary mb-4">{{$Tour->name}}</h1>
                <h2 class="parrafo-class text-white no-mostrar-en-mobil mb-4">{{$Tour->descripcion_breve}}
                </h2>
                <p><a href="#contenido" class="scroll_to Boton-Fuente-Chico Boton-Blanco"> {{$Tour->llamado_a_la_accion_text}}  <i class="fas fa-chevron-right"></i> </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
       <img v-if="mostrar_para_celuar" class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$Tour->url_img_foto_principal_chica}}" alt="{{$Tour->name}} Uruwild Uruguay"> 
       <img v-else class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$Tour->url_img_foto_principal}}" alt="{{$Tour->name}} Uruwild Uruguay">        

    </div>  
@stop



@section('contenido')

  

  
    
 <div class="site-section " id="contenido"> 
    <div class="container">  
         {!! $Tour->contenido_render !!}

         <h2 class="post-individual-section-titulo mt-5"> Precios </h2>
         <p class="post-individual-p" > El paquete completo tiene un precio de <strong> USD {{ $Tour->precio_redondeado }}</strong> por persona. La fecha límite para reservar es <strong> {{ $Tour->fecha_limite_reserva->format('d-m-Y') }} </strong>.
         </p> 

         <h2 class="post-individual-section-titulo mt-3"> ¿Cómo reservo? </h2>
         <p class="post-individual-p mb-5" > Para reservar debes completar el formulario de aquí abajo <i class="fas fa-hand-point-down"></i> y un prodigio de la atención comercial se pondrá en contacto contigo.
         </p> 


          <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
                  
             @include('paginas.home.vue.Contacto.Contacto_tour_producto')
                                  
          </contacto-component>


    </div>
  </div>
    

   


   

    

   

@stop

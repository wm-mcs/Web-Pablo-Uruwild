@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortadaChica    = $Portada->url_img_foto_principal_chica /*--}}
{{--*/ $ImagenPortada         = $Portada->url_img_foto_principal /*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo-para-tags.jpg '/*--}}
{{--*/ $Titulo                = 'Contacto' /*--}}
{{--*/ $DescriptionEtiqueta   = 'Contactate con Uruwild' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_contacto') /*--}}


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
  <div  class="site-section" id="contactar">
      <div class="container">
        <div class="d-flex  flex-column align-items-center justify-content-center">
          <div class="col-6 mb-3 mt-3 d-flex flex-row justify-content-center align-items-center ">
            <img src="{{$Teams[0]->url_img_foto_principal_chica}}"
               class="imagen-team-pagina-contacto-chica">
          </div>
          <div class="col-8 col-lg-5  mb-5">
            <p class="text-center color-text-gris">

                {{--*/ $Key  = 'pagina_contacto_como_contactar_1' /*--}}
                @include('paginas.paginas_personalizadas.partials.textos')
                <i class="fas fa-hand-point-down"></i>

                {{--*/ $Key  = 'pagina_contacto_como_contactar_2' /*--}}
                @include('paginas.paginas_personalizadas.partials.textos').

            </p>
          </div>
          <div class="col-lg-10  " id="formulario_contacto">
               <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
                  @include('paginas.home.vue.Contacto.Contacto_comun')
               </contacto-component>
          </div>
        </div>

        <div class="col-12 mt-5 mb-3 p-2 p-lg-5">
          <p class="text-center mb-5 color-text-gris">
              {{--*/ $Key  = 'tambien puedes contactar' /*--}}
              @include('paginas.paginas_personalizadas.partials.textos')
              <i aria-hidden="true" class="fas fa-hand-point-down"></i> ...
          </p>
          <p class="text-center color-text-gris mb-3" v-if="se_muestra(empresa.telefono)"  >
             <i class="fas fa-phone-square mr-2 color-iconos-footer"></i>  @{{empresa.telefono}}
          </p>
          <p class="text-center color-text-gris mb-3" v-if="se_muestra(empresa.celular)"   >
             <i class="fas fa-mobile-alt mr-2 color-iconos-footer"></i>  @{{empresa.celular}}
          </p>
          <p class="text-center color-text-gris mb-3" v-if="se_muestra(empresa.email)" >
             <i class="far fa-envelope color-iconos-footer mr-2"></i>  @{{empresa.email}}
          </p>
        </div>
      </div>
    </div>
@stop

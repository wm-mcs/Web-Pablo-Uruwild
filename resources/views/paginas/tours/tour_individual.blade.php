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
            <div class="row p-lg-5 background-black-transparent">
              <div class="col-lg-8 " style="max-width: 550px;">
                <h1  class="titulos-class text-white font-secondary mb-2">{{$Tour->name}}</h1>
                <h2 class="sub-titulos-class text-white no-mostrar-en-mobil mb-4">{{$Tour->descripcion_breve}}
                </h2>
                
               
                
           
                <p><a href="#contenido" class="scroll_to Boton-Fuente-Chico Boton-Blanco"> Conocé toda las actividades del tour <i class="fas fa-chevron-right"></i> </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="{{$Tour->name}} Uruwild Uruguay"> 
       
       

    </div>  



@stop



@section('contenido')

  

  
    
 <div class="site-section " id="contenido"> 
    <div class="container">
         


         {!! $Tour->contenido_render !!}
    </div>
  </div>
    

   


   

    

   

@stop

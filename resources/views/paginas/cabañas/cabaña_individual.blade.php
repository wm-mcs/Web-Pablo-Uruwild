@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = $Cabaña->url_img_foto_principal /*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Empresa/logo-para-tags.jpg'/*--}}
{{--*/ $Titulo                = $Cabaña->name_formateado_con_lenguaje /*--}}
{{--*/ $DescriptionEtiqueta   = $Cabaña->descripcion_breve_formateado_con_lenguaje /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = $Cabaña->route /*--}}


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

@section('cdn-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous"></script>
@stop

@section('acciones-js-manuales')
 <script>
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                  event.preventDefault();
                  $(this).ekkoLightbox();
              });
 </script>
@stop

@section('cdn-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />
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

    <div class="site-blocks-cover overlay bg-light" id="home-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row ">
              <div class="col-lg-8 p-lg-5 background-black-transparent " style="max-width: 550px;">
                <h1  class="titulos-class text-white font-secondary mb-4">{{$Cabaña->name_formateado_con_lenguaje}}</h1>
                <h2 class="parrafo-class text-white no-mostrar-en-mobil mb-4">{{$Cabaña->descripcion_breve_formateado_con_lenguaje}}
                </h2>
                
               
                
           
                <p><a href="#contenido" class="scroll_to Boton-Fuente-Chico Boton-Blanco"> Conocé toda las actividades  <i class="fas fa-chevron-right"></i> </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img v-if="mostrar_para_celuar" class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$Cabaña->url_img_foto_principal_chica}}" alt="{{$Cabaña->name_formateado_con_lenguaje}} Uruwild Uruguay"> 
       <img v-else class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$Cabaña->url_img_foto_principal}}" alt="{{$Cabaña->name_formateado_con_lenguaje}} Uruwild Uruguay"> 

       
       

    </div>  



@stop



@section('contenido')

  

  
    
 <div class="site-section " id="contenido"> 

 <div class="row justify-content-center mb-5 mx-0">
    <div class="col-12 col-lg-9 p-1">
        <div class="row mx-0">
          @foreach($Cabaña->imagenes as $Imagen)
            <a href="{{$Imagen->url_img}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-6 col-lg-4 p-2 mb-2">
                <img src="{{$Imagen->url_img_chica}}" class="img-fluid">
            </a>
          @endforeach 
        </div>
        
    </div>
</div>



    <div class="container">  
         {!! $Cabaña->contenido_render !!}

         <h2 class="post-individual-section-titulo mt-5"> Precios </h2>
         <p class="post-individual-p" > Precio por día <strong> USD {{ $Cabaña->precio_redondeado }}</strong>. 
         </p> 

         <h2 class="post-individual-section-titulo "> ¿Cómo reservo? </h2>
         <p class="post-individual-p mb-4" > Para reservar debes completar el formulario de aquí abajo <i class="fas fa-hand-point-down"></i> y un prodigio de la atención comercial se pondrá en contacto contigo.
         </p> 


          <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
                  
             @include('paginas.home.vue.Contacto.Contacto_tour_producto')
                                  
          </contacto-component>


    </div>
  </div>
    

   


   

    

   

@stop
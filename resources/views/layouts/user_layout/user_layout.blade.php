<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- META-TAGS DE FAVICONS, DISPOSITIVOS Y THUMBNAILS -->
      <!-- social media meta-tags for proper sharing
      (la imagen tiene que estar en la carpeta root, ratio 1.91:1 1200x630px) -->

      @yield('og-tags')

      {{-- <meta property="og:title" content="Global Target">
      <meta property="og:description" content="Agencia de modelos, eventos y promociones.">
      <meta property="og:image" content="https://www.globaltarget.com.uy/thumbnail.jpg">
      <meta property="og:url" content="https://www.globaltarget.com.uy/"> --}}
      
      

      <title> @yield('title') | {{$Empresa->name}} </title>
      <meta name="Description" CONTENT="@yield('MetaContent')">      
      <META name="robots" content="@yield('MetaRobot')">
      <meta name="Keywords"  content="@yield('palabras-claves')">

      {{-- css --}}   
      @include('paginas.comunes.css_y_fonts')  

  
  </head>
  
  <body > 

     


           <span class="helper-relative" id="app">             
             <div class="d-flex align-items-center flex-column get_width_100{{-- wraper-content-principal-con-nav --}}">
                  @yield('content')  
             </div>
           </span>


    <!-- Scripts -->
    <script src="{{url()}}{{ elixir('js/all.js')}} " ></script>  
    @include('paginas.home.home_vue_script')

  </body>
</html>   
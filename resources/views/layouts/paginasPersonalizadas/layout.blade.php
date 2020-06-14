<!doctype html>
<html lang="es">
  <head>
    <title> @yield('title')  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('paginas.comunes.css_y_fonts')   
    @yield('favicon')

    @yield('og-tags')
    @yield('data-estructurada')
    @yield('pixcel-facebook')

    <meta name="Description" CONTENT="@yield('MetaContent')">      
    <META name="robots" content="@yield('MetaRobot')">
    <meta name="Keywords"  content="@yield('palabras-claves')">
    @include('paginas.comunes.analytics')
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
      
      <span id="app" >

        {{-- C a r g a d o r --}}        
        <div v-if="cargando" class="w-100 background-secondary d-flex flex-row align-item-center justify-content-center vh-100">
          <div class="cssload-tube-tunnel"></div>
        </div>
        <span v-else>   

        {{-- A l g o   d e l   m e n ú    m ó b i l  --}}
        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>

        @yield('header')
        @yield('portada')
        @yield('contenido')
        @yield('footer') 
        </span> {{-- C o n t e n i d o   v - e l s e     d e l     c a r g a d o r  --}}  

      </span> {{-- F i n a l   d e l   w r a p    d e   v u e   --}}

  

  <script src="{{url()}}{{ elixir('js/credo.js')}} " ></script>   


  @if(Auth::guest())
      <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
  @else
      @if(Auth::user()->role ==='adminMcos522')
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script> 
      @else
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
      @endif
  @endif
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>

  <script type="text/javascript">
    @yield('vue')  
  </script>

  
  </body>
</html> 
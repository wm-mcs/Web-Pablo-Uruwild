<!doctype html>
<html lang="es">
  <head>
    <title> @yield('title')  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('paginas.comunes.css_y_fonts')  
    
  

    @yield('og-tags')
    @yield('data-estructurada')
    @yield('pixcel-facebook')

    <meta name="Description" CONTENT="@yield('MetaContent')">      
    <META name="robots" content="@yield('MetaRobot')">
    <meta name="Keywords"  content="@yield('palabras-claves')">

    @include('paginas.comunes.analytics')
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  


  <div id="app" class="site-wrap">
   <div v-if="cargando" class="contiene-cargador">
    <div class="cssload-container">
      <div class="cssload-tube-tunnel"></div>
    </div>
   </div>

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      @yield('header')
      
    </header>

    @yield('contenido')



    <contacto-component :empresa="empresa" inline-template>
      <section class="site-section bg-primary" id="contact-section">
<div v-if="!se_envio" class="container">
  <div class="row">
    <div class="col-12 mb-5 position-relative">
      <h2 class="section-title text-center text-white mb-5">Contacto</h2>
    </div>
  </div>
  <div action="#" class="form">
    <div class="row mb-4">
      
      <div class="form-group col-12">
        <input v-model="name" type="text" class="form-control" placeholder="Nombre">
      </div>
    </div>

    <div class="row mb-4">
      <div class="form-group col-12">
        <input v-model="email" type="email" class="form-control" placeholder="Email ">
      </div>
    </div>
   
    <div class="row mb-4">
      <div class="form-group col-12">
        <textarea v-model="mensaje" cols="30" rows="10" class="form-control" placeholder="Escribe"></textarea>
      </div>
    </div>

    <div class="row">

      <div v-if="errores" >
        <div v-for="error in errores">@{{error}}</div>
      </div>

      <div class="col-md-6">
        <input type="submit" class="btn btn-dark" v-on:click="enviarMensaje" value="Enviar mensaje">
      </div>
    </div>
    
  </div>
</div>
<div v-else class="section-title text-center text-white mb-5">
  <h2 class="section-title text-center text-white mb-5">@{{mensaje_se_envio}}</h2>
</div>
    


</section>

    </contacto-component>



    @if($Empresa->whatsapp_empresa != 'no')
    <div class="site-section flex-row-column">      
      @include('paginas.home.whatasapp_contacto_mensaje')
    </div>
    @endif



    <footer class="site-section bg-light footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">@{{empresa.name}}</h3>
            <p  v-if="se_muestra(empresa.home_footer_sobre_mi)">@{{empresa.home_footer_sobre_mi}}</p>
            <p v-if="se_muestra(empresa.direccion_empresa)"><span class="d-inline-block d-md-block">@{{empresa.direccion_empresa}}</p>
          </div>
          <div class="col-md-6 mx-auto">
            <div class="row">
             
              <div class="col-lg-6">
                <h3 class="footer-title">Rutas de interés</h3>
                <ul class="list-unstyled">
                  <li><a href="#about-section" >Sobre mi</a></li>
                  <li><a href="#blog-section"  >Blog</a></li>
                  <li><a href="#experiencia-section" >Trayectoria</a></li>
                  <li><a href="#contact-section" >Contacto</a></li>
                   @if(Auth::guest())
                    <li><a href="{{route('auth_login_get')}}" >Iniciar sesión</a></li>

                   @else
                    <li><a href="{{route('get_datos_corporativos')}}" >Administrar</a></li>
                    <li><a href="{{route('logout')}}" >Salir</a></li>
                   @endif
                </ul>
              </div>   



               <div class="col-lg-6">
                <h3 class="footer-title">Datos</h3>
                <ul class="list-unstyled">

                  
                  <li v-if="se_muestra(empresa.telefono)"><a  href="#" ><i class="fas fa-phone-square"></i>  @{{empresa.telefono}}</a></li>
                  <li v-if="se_muestra(empresa.celular)" ><a  href="#"  ><i class="fas fa-mobile-alt"></i> @{{empresa.celular}} </a></li>
                  <li v-if="se_muestra(empresa.direccion)"><a  href="#" ><i class="fas fa-map-marker-alt"></i> @{{empresa.direccion}}</a></li>
                  <li v-if="se_muestra(empresa.horarios)"><a  href="#" ><i class="far fa-clock"></i>@{{empresa.horarios}}</a></li>
                  <li v-if="se_muestra(empresa.email)"><a  href="#" ><i class="far fa-envelope"></i> @{{empresa.email}}</a></li>

                </ul>
              </div> 
        
               
             
            </div>
          </div>
          
          <div class="col-md-3">
            <h3 class="footer-title">Sígueme</h3>
            <a v-if="se_muestra(empresa.twitter_url)" :href="empresa.twitter_url" class="social-circle p-2"><span class="icon-twitter"></span></a>
            <a v-if="se_muestra(empresa.facebook_url)" :href="empresa.facebook_url" class="social-circle p-2"><span class="icon-facebook"></span></a>
            <a v-if=" se_muestra(empresa.instagram_url)" :href="empresa.instagram_url" class="social-circle p-2"><span class="icon-instagram"></span></a>
            <a v-if="se_muestra(empresa.youtube_url)" :href="empresa.youtube_url" class="social-circle p-2"><span class="icon-youtube"></span></a>
            <a v-if="se_muestra(empresa.linkedin_url)" :href="empresa.linkedin_url" class="social-circle p-2"><span class="icon-linkedin"></span></a>
            <a v-if="se_muestra(empresa.Whatsapp_cel)" :href="empresa.link_whatsapp_send" class="social-circle p-2"> <i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
        @yield('iconos-compartir')
        
      </div>
    </footer>

  </div> 

  <!-- .site-wrap -->

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
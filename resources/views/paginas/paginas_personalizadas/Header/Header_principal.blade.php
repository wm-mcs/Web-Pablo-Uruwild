<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-between get_width_100">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto ">
                <li>
                  <a  href="{{url()}}" >  

                    
                    <img class="logo-nav" v-if="scrolled > 0" src="{{$Empresa->img_logo_horizontal_color}}">  
                    <img class="logo-nav" v-else src="{{$Empresa->img_logo_horizontal_blanco}}">                 
                    
                   
                  </a>
                </li>
                
                
              </ul>
            </nav>
          </div>

        

          <div class="row align-items-center text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">               
                {{-- <li><a href="{{route('get_pagina_quien_es')}}" class="text-uppercase">Sobre Uruwild</a></li>
                <li><a href="{{route('get_pagina_servicios')}}" class="text-uppercase">Servicios</a></li>
                <li><a href="{{route('get_pagina_contacto')}}" class="text-uppercase">Contacto</a></li> --}}
                @if(!Auth::guest())
                  <li><a href="{{route('get_datos_corporativos')}}" class="text-uppercase">Administrar</a></li>
                  <li><a href="{{route('logout')}}" class="text-uppercase">Salir</a></li>
                @endif
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;">
              <a href="#" class="site-menu-toggle js-menu-toggle float-right">
                 <i class="fas fa-bars h3"></i>
              </a>
            </div>
            
            
            
              
            
              
            

          </div>

        </div>
      </div>
      
    </header>
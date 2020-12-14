<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-between get_width_100">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto ">
                <li>
                  <a  href="{{route('get_home_con_lenguaje', Session::get('lenguaje'))}}" >  

                    
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

                <li>
                  <a href="{{route('get_home_con_lenguaje', Session::get('lenguaje'))}}" class="text-uppercase" >
                    {{--*/ $Key  = 'nav inicio' /*--}}
                    @include('paginas.paginas_personalizadas.partials.textos') 
                  </a>
                </li>
                <li>
                  <a href="{{route('get_pagina_tours', Session::get('lenguaje'))}}" class="text-uppercase" >
                    {{--*/ $Key  = 'nav tours de pesca' /*--}}
                    @include('paginas.paginas_personalizadas.partials.textos') 
                  </a>
                </li> 
                <li>
                  <a href="{{route('get_pagina_productos',Session::get('lenguaje'))}}" class="text-uppercase" >
                    {{--*/ $Key  = 'nav ecoturismo' /*--}}
                    @include('paginas.paginas_personalizadas.partials.textos')
                  </a>
                </li>
                <li>
                  <a href="{{route('get_pagina_turismo_rural',Session::get('lenguaje'))}}" class="text-uppercase" >
                    {{--*/ $Key  = 'nav turismo rural' /*--}}
                    @include('paginas.paginas_personalizadas.partials.textos')
                  </a>
                </li>
                {{-- <li><a href="{{route('get_pagina_cabañas')}}" class="text-uppercase">Estancias</a></li> --}}
                <li>
                  <a href="{{route('get_pagina_quien_es',Session::get('lenguaje'))}}" class="text-uppercase" >
                    {{--*/ $Key  = 'nav sobre' /*--}}
                    @include('paginas.paginas_personalizadas.partials.textos') 
                  </a>
                </li>
                <li>
                  <a href="{{route('get_pagina_contacto')}}" class="text-uppercase" >
                    {{--*/ $Key  = 'nav contacto' /*--}}
                    @include('paginas.paginas_personalizadas.partials.textos')
                  </a>
                </li>
                <li>
                  <div data-toggle="modal" data-target="#exampleModal" class=" col-12 text-center cursor-pointer color-text-white">                   
                      Session::get('lenguaje')                 
                  </div>   
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cambiar de idioma</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                          @foreach(config('lenguajes') as $Lenguaje)
                           
                              <a href="{{route('get_home_con_lenguaje', $Lenguaje)}}" class="d-block col-6 @if(Session::get('lenguaje') !=  $Lenguaje) p-3 @endif">
                                  <img class="servicio_lista_imagen" src="{{url()}}/imagenes/Lenguaje/{{Session::get('lenguaje')}}.jpg" alt="">
                              </a>
                           
                          @endforeach  
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>                          
                        </div>
                      </div>
                    </div>
                  </div>                
                </li>
               
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
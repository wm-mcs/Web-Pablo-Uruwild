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
                  <div data-toggle="modal" data-target="#exampleModal" class=" col-12 cursor-pointer text-color-primary">
                      {{Session::get('lenguaje')      }}
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

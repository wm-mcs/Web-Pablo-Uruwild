
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger " href="#sobre_mi">SOBRE MI</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger " href="#libro">LIBRO</a>
            </li> 
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger " href="#blog">BLOG</a>
            </li>    
            @if($Empresa->cv != 'no')                 
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('get_pagina_cv')}}">CV</a>
                  </li> 
            @endif     

             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#donde">¿Donde atiendo?</a>
             </li>
           

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">CONTACTO</a>
            </li>
           
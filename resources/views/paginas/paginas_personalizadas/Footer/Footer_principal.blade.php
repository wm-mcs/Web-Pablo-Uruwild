<footer class="site-section background-gris-1 ">
      <div class="container">


        
        <div class="row d-flex flex-row justify-content-center align-items-start">

          {{-- P r i m e r    b l o q u e   --}}
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5 ">@{{empresa.name}}</h3>
            <p  class="contiene-p-linea">Lo que piensas es lo que atraes</p>           
          </div>

          {{-- S e g u n d o   B l o q u e     --}}  
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5">Rutas de interés</h3>
            

             
               <p class="contiene-p-linea">
                 <a class="contiene-link-linea" href="{{route('get_pagina_contacto')}}" >Contacto</a>
               </p >
                

               @if(Auth::guest())
               <p class="contiene-p-linea">
                 <a class="contiene-link-linea" href="{{route('auth_login_get')}}" >Iniciar sesión</a>
               </p>
                
               @else
               <p class="contiene-p-linea">
                 <a class="contiene-link-linea" href="{{route('get_datos_corporativos')}}" >Administrar</a>
               </p>
               <p class="contiene-p-linea">
                 <a class="contiene-link-linea" href="{{route('logout')}}" >Salir</a>
               </p>
                
                
               @endif
            
          </div>   


          {{-- T e r c e r   B l o q u e     --}}  
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5">Datos de contacto</h3>
                             
              <p class="contiene-p-linea" v-if="se_muestra(empresa.telefono)"  > 
                 <i class="fas fa-phone-square mr-2 color-iconos-footer"></i>   @{{empresa.telefono}}
              </p>
              <p class="contiene-p-linea" v-if="se_muestra(empresa.celular)"   > 
                 <i class="fas fa-mobile-alt mr-2 color-iconos-footer"></i>     @{{empresa.celular}} 
              </p>
              <p class="contiene-p-linea" v-if="se_muestra(empresa.direccion)"  >
                 <i class="fas fa-map-marker-alt mr-2 color-iconos-footer"></i> @{{empresa.direccion}}
              </p>
              <p class="contiene-p-linea" v-if="se_muestra(empresa.horarios)"  > 
                 <i class="far fa-clock mr-2 color-iconos-footer"></i>          @{{empresa.horarios}}
              </p>
              <p class="contiene-p-linea" v-if="se_muestra(empresa.email)" >    
                 <a class="contiene-link-linea" href="{{route('get_pagina_contacto')}}"><i class="far fa-envelope color-iconos-footer mr-2"></i>       @{{empresa.email}}</a> 
              </p>
            
          </div> 
        
               
             
          
          {{-- C u a r t o   B l o q u e     --}}
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5 text-color-primary text-bold">Sígueme en mis redes</h3>
            <p class="contiene-p-linea" v-if="se_muestra(empresa.twitter_url)">
             <a class="contiene-link-linea" :href="empresa.twitter_url">
               <span class="icon-twitter mr-2 color-iconos-footer"></span> Twitter
             </a> 
            </p>
            <p class="contiene-p-linea" v-if="se_muestra(empresa.facebook_url)">
             <a class="contiene-link-linea" :href="empresa.facebook_url">
               <span class="icon-facebook mr-2 color-iconos-footer"></span> Facebook
             </a>
            </p>
            <p class="contiene-p-linea" v-if=" se_muestra(empresa.instagram_url)">
             <a class="contiene-link-linea" :href="empresa.instagram_url">
               <span class="icon-instagram mr-2 color-iconos-footer"></span> Instagram
             </a>
            </p>
            <p class="contiene-p-linea" v-if="se_muestra(empresa.youtube_url)">
             <a class="contiene-link-linea" :href="empresa.youtube_url">
               <span class="icon-youtube mr-2 color-iconos-footer"></span> Youtube
             </a>
            </p>
            <p class="contiene-p-linea" v-if="se_muestra(empresa.linkedin_url)">
             <a class="contiene-link-linea" :href="empresa.linkedin_url">
               <span class="icon-linkedin mr-2 color-iconos-footer"></span> Linkedin
             </a>
            </p>
            <p class="contiene-p-linea" v-if="se_muestra(empresa.Whatsapp_cel)"> 
             <a class="contiene-link-linea" :href="empresa.link_whatsapp_send" >
               <i class="fab fa-whatsapp mr-2 color-iconos-footer"></i> Whatsapp
             </a>
            </p>
          </div>
        </div>

        @yield('iconos-compartir')
       
      </div>
    </footer>
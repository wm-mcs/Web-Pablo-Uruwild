
@if(isset($Mostrar_admin) && $Mostrar_admin == true)
<div class="col-md-6 col-lg-4 mb-4 altura-minima-del-team" >
    <div class="servicio_lista service d-flex flex-column align-items-center ">
      
      <div class="col-6 mb-3 mt-3 d-flex flex-row justify-content-center align-items-center ">
        <img data-src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="imagen-team-chica">
      </div>
        
                   
      <div class="p-1 mt-2 col-12">
        <h3 class="sub-titulos-class text-center   mb-2">
          <span  class="font-primary text-center text-color-secondary">
            <a href="{{$Route}}">
            <b> {{$Entidad->first_name}}</b>
          </a>
          </span>              
        </h3>
        <p class="color-text-black text-bold text-center mb-2 ">
         {{$Entidad->cargo}}
        </p>
        <p class="color-text-gris text-center mb-2 ">
         {{$Entidad->descripcion_breve}}
        </p>
        <div class=" col-12 d-flex flex-row justify-content-center align-items-center">
          <div class="d-flex flex-row align-items-center">
            @if($Entidad->facebook_valor != false) 
            <a class="p-2 d-block team-social-personalizado" href="{{$Entidad->facebook_valor}}">
              <i class="fab fa-facebook-f"></i>
            </a>
            @endif
            @if($Entidad->instagram_valor != false) 
            <a class="p-2  d-block team-social-personalizado" href="{{$Entidad->instagram_valor}}">
              <i class="fab fa-instagram"></i>
            </a>
            @endif
            @if($Entidad->youtube_valor != false )
            <a class="p-2  d-block team-social-personalizado" href="{{$Entidad->youtube_valor}}">
              <i class="fab fa-youtube"></i>
            </a>
            @endif
            @if($Entidad->linkedin_valor != false) 
            <a class="p-2  d-block team-social-personalizado" href="{{$Entidad->linkedin_valor}}">
              <i class="fab fa-linkedin-in"></i>
            </a>
            @endif
            @if($Entidad->whatsapp_valor != false) 
            <a class="p-2  d-block team-social-personalizado" href="{{$Entidad->whatsapp_valor}}">
              <i class="fab fa-whatsapp"></i>
            </a>
            @endif
          </div>
        </div>            
      </div>
    </div>
</div>
@else 
<div class="col-md-6 col-lg-4 mb-4 altura-minima-del-team">
    <div class="servicio_lista service d-flex flex-column align-items-center ">
      
      <div class="col-6 mb-3 mt-3 d-flex flex-row justify-content-center align-items-center ">
        <img src="{{$Entidad->url_img_foto_principal_chica}}" alt="{{$Entidad->descripcion_breve}}" class="imagen-team-chica">
      </div>
        
                   
      <div class="p-1 mt-2 col-12">
        <h3 class="sub-titulos-class text-center   mb-2">
          <span  class="font-primary text-center text-color-secondary">
            <b> {{$Entidad->first_name}}</b>
          </span>              
        </h3>
        <p class="color-text-black text-bold text-center mb-2 ">
         {{$Entidad->cargo}}
        </p>
        <p class="color-text-gris text-center mb-2 ">
         {{$Entidad->descripcion_breve}}
        </p>
        <div class=" col-12 d-flex flex-row justify-content-center align-items-center">
          <div class="d-flex flex-row align-items-center">
            @if($Entidad->facebook_valor != false) 
            <a class="p-2 d-block team-social-personalizado" href="{{$Entidad->facebook_valor}}">
              <i class="fab fa-facebook-f"></i>
            </a>
            @endif
            @if($Entidad->instagram_valor != false) 
            <a class="p-2  d-block team-social-personalizado" href="{{$Entidad->instagram_valor}}">
              <i class="fab fa-instagram"></i>
            </a>
            @endif
            @if($Entidad->youtube_valor != false )
            <a class="p-2  d-block team-social-personalizado" href="{{$Entidad->youtube_valor}}">
              <i class="fab fa-youtube"></i>
            </a>
            @endif
            @if($Entidad->linkedin_valor != false) 
            <a class="p-2  d-block team-social-personalizado" href="{{$Entidad->linkedin_valor}}">
              <i class="fab fa-linkedin-in"></i>
            </a>
            @endif
            @if($Entidad->whatsapp_valor != false) 
            <a class="p-2  d-block team-social-personalizado" href="{{$Entidad->whatsapp_valor}}">
              <i class="fab fa-whatsapp"></i>
            </a>
            @endif
          </div>
        </div>            
      </div>
    </div>
</div>
@endif
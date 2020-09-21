
{{-- E s t a   e s   l a   v i s t a   p a r a   a d m i n  --}}
@if(isset($Mostrar_admin) && $Mostrar_admin == true)
<div class="col-md-6 col-lg-4 mb-4">
    <div class="servicio_lista service">
      <div class="p-3 mt-2">
        <p class="mb-3">
          @if($Entidad->estado == 'si')
            <span class="color-text-success">Activo</span>
          @else
            <span class="color-text-gris">Inactivo</span>
          @endif
        </p>   
        <h3 class="sub-titulos-class   mb-2">
          <a href="{{$Route}}" class="font-primary text-color-secondary">
           {{$Entidad->name}}
          </a>                
        </h3>
        <p class="color-text-gris mb-2 ">
         {{$Entidad->página}}
        </p>
        <p class="">
          <a href="{{$Route}}"> Editar  <i class="fas fa-chevron-right"></i></a>
        </p>  
                    
      </div>
    </div>
</div>
@else 

@endif
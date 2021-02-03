<div class="admin-columna-contenedor background-gris-4 pt-2">
 <div class="col-11">
   {{-- imagen logo --}}
   <a href="{{route('get_home')}}">
    @if(file_exists($Empresa->path_img_logo_cuadrado_blanco))
      <img class="p-4 img-fluid" src="{{$Empresa->img_logo_cuadrado_blanco}}">
    @else
    <span class="text-color-primary">{{$Empresa->name}}</span>
    @endif
   </a>
 </div>

 <ul>
   @if(Auth::user()->role === 'adminMcos522')
   <div id="admin-col-superadmin">
        <a href="{{route('get_admin_users')}}">
          <li class="admin-columna-li mi-float-right"> Usuarios</li>
        </a>
        <a href="{{route('get_admin_noticias')}}">
          <li class="admin-columna-li mi-float-right"> Blog</li>
        </a>
        <a href="{{route('get_admin_textos')}}">
          <li class="admin-columna-li mi-float-right"> Textos</li>
        </a>


    </div>
   @endif

   <div id="admin-col-admin">
        <a href="{{route('get_admin_tours')}}">
          <li class="admin-columna-li mi-float-right"> Tours de pesca</li>
        </a>
        <a href="{{route('get_admin_productos_especiales')}}">
          <li class="admin-columna-li mi-float-right"> Ecoturismo</li>
        </a>
        <a href="{{route('get_admin_turismo_rural')}}">
          <li class="admin-columna-li mi-float-right">Lodges y estancias</li>
        </a>
        <a href="{{route('get_admin_teams')}}">
          <li class="admin-columna-li mi-float-right">Team</li>
        </a>
        <a href="{{route('get_admin_portadas_de_paginas')}}">
          <li class="admin-columna-li mi-float-right">Páginas portadas</li>
        </a>
        <a href="{{route('get_datos_corporativos')}}">
          <li class="admin-columna-li mi-float-right"> Mis datos</li>
        </a>
    </div>
</ul>



</div>

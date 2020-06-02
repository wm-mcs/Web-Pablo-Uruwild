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
          <li class="admin-columna-li mi-float-right"><i class="fas fa-user"></i> Usuarios</li>
        </a>
        <a href="{{route('get_admin_productos')}}">
          <li class="admin-columna-li mi-float-right"><i class="fab fa-product-hunt"></i> Productos</li>
        </a>       

        <a href="{{route('get_admin_marcas')}}">
          <li class="admin-columna-li mi-float-right"><i class="fab fa-apple"></i> Marcas</li>
        </a>  

        <a href="{{route('get_admin_categorias')}}">
          <li class="admin-columna-li mi-float-right"><i class="fas fa-bars"></i> Categorias</li>
        </a>  

        <a href="{{route('get_admin_trayectorias')}}">
          <li class="admin-columna-li mi-float-right"><i class="fas fa-user-tie"></i> Trayectoria</li>
        </a>   

       

          <a href="{{route('get_admin_noticias')}}">
          <li class="admin-columna-li mi-float-right"><i class="fas fa-newspaper"></i> Blog</li>
        </a>  
         

        

        
        
    </div>
   @endif

   <div id="admin-col-admin">
        <a href="{{route('get_datos_corporativos')}}">
            <li class="admin-columna-li mi-float-right"><i class="fas fa-building"></i> Mis datos</li>
        </a>  
         <a href="{{route('get_admin_cabañas')}}">
          <li class="admin-columna-li mi-float-right"> Cabañas</li>
        </a>  

       
        
    </div>

</ul>


    
</div>
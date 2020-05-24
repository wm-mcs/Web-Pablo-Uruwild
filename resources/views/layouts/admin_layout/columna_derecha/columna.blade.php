<div class="admin-columna-contenedor">

 {{-- imagen logo --}}
 <a href="{{route('get_home')}}">

  @if(file_exists($Empresa->_path_img_logo_horizontal))
  <img class="admin-header-logo" src="{{$Empresa->img_logo_cuadrado}}">
  
  @else
  <span class="text-color-primary">Laura Jodral Garcia</span>
  @endif


 </a>

 <ul>
   @if(Auth::user()->role === 'adminMcos522')
   <div id="admin-col-superadmin">
        <a href="{{route('get_datos_home_web')}}">
            <li class="admin-columna-li mi-float-right"><i class="fas fa-igloo"></i> Admin Panel</li>
        </a> 
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

        <a href="{{route('get_cv')}}">
          <li class="admin-columna-li mi-float-right"><i class="fas fa-user-tie"></i> CV</li>
        </a>  

         

        

        
        
    </div>
   @endif

   <div id="admin-col-admin">
        <a href="{{route('get_datos_corporativos')}}">
            <li class="admin-columna-li mi-float-right"><i class="fas fa-building"></i> Mis datos</li>
        </a>  

        <a href="{{route('get_admin_noticias')}}">
          <li class="admin-columna-li mi-float-right"><i class="fas fa-newspaper"></i> Blog</li>
        </a>   
        
    </div>

</ul>


    
</div>
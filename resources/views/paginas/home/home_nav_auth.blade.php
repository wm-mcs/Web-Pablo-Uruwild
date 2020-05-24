



@if(Auth::guest())

@else
   <li class="nav-item">
              <a class="nav-link " href="{{route('get_admin_home')}}">{{Auth::user()->first_name}}</a>
   </li>
   <li class="nav-item">
              <a class="nav-link " href="{{route('logout')}}">Salir</a>
   </li>
@endif
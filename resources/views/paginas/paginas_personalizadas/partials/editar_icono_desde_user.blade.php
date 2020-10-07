 @if(!Auth::guest() )
  @if( Auth::user()->first_name == 'Pablo' || Auth::user()->first_name == 'Mauricio')
      <a class="" href="{{$Entidad->route_admin}}"><i class="fas fa-edit"></i></a>
  @endif
 @endif
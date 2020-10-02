
  @if($Textos->count() > 0)  

    {{--*/ $Entidad_texto  = $Textos->where('name',$Key)->first() /*--}}
    @if(isset($Entidad_texto->name_formateado_con_lenguaje))
      {{$Entidad_texto->texto_formateado_con_lenguaje}} 

       @if(!Auth::guest() )
        @if( Auth::user()->first_name = 'Pablo' || Auth::user()->first_name = 'Mauricio')
            <a href="{{$Entidad_texto->route_admin}}"><i class="fas fa-edit"></i></a>
        @endif
       @endif
    @endif
  @endif

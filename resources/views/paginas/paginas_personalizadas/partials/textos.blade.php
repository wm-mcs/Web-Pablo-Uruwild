
  @if($Textos->count() > 0)  
    @if(isset($Textos->where('name',trim($Key))->first()->name_formateado_con_lenguaje))
      {{$Textos->where('name',trim($Key))->first()->texto_formateado_con_lenguaje}}
    @endif
  @endif

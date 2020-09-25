
  @if($Textos->count() > 0)
  {{dd($Textos->where('name',$Key))}}
    @if(isset($Textos->where('name',$Key)->name_formateado_con_lenguaje))
      {{$Textos->where('name',$Key)->name_formateado_con_lenguaje}}
    @endif
  @endif

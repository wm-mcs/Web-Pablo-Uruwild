@extends('layouts.admin_layout.admin_layout')

@section('miga-de-pan') 
 <h1 class="titulos-class  text-color-secondary font-secondary">{{$Titulo}}</h1>
@stop

@section('content')

 {{-- titulo --}}
 <div class="container">
  <div class="row  p-3 justify-content-between ">
   


    <div class="col-6 col-lg-4"> 
     <a class="col-12 Boton-Fuente-Chica Boton-Secondary-Relleno" href="{{route($Route_crear)}}"> 
      Crear       
     </a>  
    </div>
    @include('admin.'. $Carpeta_view_admin . '.partes.buscador')
   </div>
 </div>
 <div class="container p-4">
   <div class="row col-12">
     @foreach($Entidades as $Entidad)

          {{--*/ $Entidad  = $Entidad /*--}}
          {{--*/ $Route    = $Entidad->route_admin /*--}}
          @include('admin.'. $Carpeta_view_admin . '.partes.lista_sin_imagen')
     @endforeach
   </div>
   <div>
     {!! $Entidades->appends(Request::all())->render() !!}
   </div>
 </div>
  
@stop
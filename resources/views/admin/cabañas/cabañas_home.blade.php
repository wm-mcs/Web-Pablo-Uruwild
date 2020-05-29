@extends('layouts.admin_layout.admin_layout')

@section('miga-de-pan') 

 <h1 class="titulos-class  text-color-primary font-secondary">Cabañas</h1>
@stop

@section('content')

 {{-- titulo --}}
 <div class="container">
  <div class="row  p-3 justify-content-between ">
   


    <div class="col-6 col-lg-4"> 
     <a class="col-12 Boton-Fuente-Chica Boton-Primario-Relleno" href="{{route('get_admin_cabañas_crear')}}"> 
      Crear cabaña
      
     </a>  
    </div>
    @include('admin.noticias.partes.buscador')
   </div>
 </div>
 <div class="container p-4">
   <div class="row col-12">
     @foreach($Entidades as $Entidad)
          @include('admin.cabañas.partes.lista')
     @endforeach
   </div>
   <div>
     {!! $Entidades->appends(Request::all())->render() !!}
   </div>
 </div>
  
@stop
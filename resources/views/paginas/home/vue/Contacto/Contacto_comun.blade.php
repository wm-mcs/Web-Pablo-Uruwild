<div v-if="!se_envio" class="container">

  
 
  <div action="#" class="form mt-4 col-12 col-lg-10 p-2 p-lg-5 ml-auto mr-auto background-gris-0">
    <div class="row mb-4">
      
      <div class="form-group col-lg-6">


        {{--*/ $Key    = 'formulario placeholder name' /*--}}
        {{--*/ $Texto  = $Textos->where('name',$Key)->first()->texto_formateado_con_lenguaje /*--}}

        @include('paginas.paginas_personalizadas.partials.text_to_place_holder')
        <input v-model="data_mensaje.name" type="text" class="input-text-class-secondary" placeholder="{{$Texto}}">
      </div>

      <div class="form-group col-lg-6">
        {{--*/ $Key  = 'formulario placeholder email' /*--}}
        {{--*/ $Texto  = $Textos->where('name',$Key)->first()->texto_formateado_con_lenguaje /*--}}
        @include('paginas.paginas_personalizadas.partials.text_to_place_holder')
        <input v-model="data_mensaje.email" type="email" class="input-text-class-secondary" placeholder="{{$Texto}}">
      </div>
    </div>

     <div class="row mb-4">
      <div class="form-group col-12">
        {{--*/ $Key  = 'formulario placeholder pais' /*--}}
        {{--*/ $Texto  = $Textos->where('name',$Key)->first()->texto_formateado_con_lenguaje /*--}}
        @include('paginas.paginas_personalizadas.partials.text_to_place_holder')
        <input v-model="data_mensaje.pais" type="text" class="input-text-class-secondary" placeholder="{{$Texto}}">
        
      </div>
    </div>

   

   
   
   

    

    <div class="row mb-4 justify-content-end">

      <p class="col-12 text-bold -text-primary mb-4">
       {{--*/ $Key  = 'pagina contacto por que' /*--}}
       @include('paginas.paginas_personalizadas.partials.textos') 
      </p>

      <div class="d-flex  align-items-center  col-12 mb-2">
        {{--*/ $Key  = 'formulario contacto interes pesca' /*--}}
        {{--*/ $Texto  = $Textos->where('name',$Key)->first()->texto_formateado_con_lenguaje /*--}}

        <input class="m-0 mr-4" type="checkbox" name="" value="{{$Texto}}" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">@include('paginas.paginas_personalizadas.partials.textos')  </p>
      </div>
      <div class="d-flex  align-items-center  col-12 mb-2">
        {{--*/ $Key  = 'formulario contacto interes explorar uruguay' /*--}}
        {{--*/ $Texto  = $Textos->where('name',$Key)->first()->texto_formateado_con_lenguaje /*--}}

        <input class="m-0 mr-4" type="checkbox" name="" value="{{$Texto}}" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">@include('paginas.paginas_personalizadas.partials.textos')</p>
      </div>
       <div class="d-flex  align-items-center  col-12 mb-2">
        {{--*/ $Key  = 'formulario contacto interes  desconectarme' /*--}}
        {{--*/ $Texto  = $Textos->where('name',$Key)->first()->texto_formateado_con_lenguaje /*--}}

        <input class="m-0 mr-4" type="checkbox" name="" value="Quiero desconectarme de todo" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">@include('paginas.paginas_personalizadas.partials.textos') </p>
      </div>    
    </div>

     <div class="row mb-4">
      <div class="form-group col-12">
        {{--*/ $Key  = 'formulario place holder mensaje' /*--}}
        {{--*/ $Texto  = $Textos->where('name',$Key)->first()->texto_formateado_con_lenguaje /*--}}
         @include('paginas.paginas_personalizadas.partials.text_to_place_holder')
        <textarea v-model="data_mensaje.mensaje" class=" input-text-class-secondary" cols="30" rows="4"  placeholder="{{$Texto}}"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6" v-if="errores" >
        <div :class="classTextColor" v-for="error in errores">@{{error}}</div>
      </div>
      <div class="col-md-12">
        <div v-if="cargando" class="flex-column align-items-center">
          <div class="cssload-tube-tunnel" :class="classCargadorColor"></div>
        </div>
        <div v-else v-on:click="enviarMensaje" class="Boton-Fuente-Chica Boton-Secondary-Sin-Relleno" value="Enviar mensaje">
          {{--*/ $Key  = 'formulario contacto boton de pagina de contacto' /*--}}
          @include('paginas.paginas_personalizadas.partials.textos')
         <i class="fas fa-angle-double-right"></i>
        </div>
      </div> 
      <div>
       
      </div>  

    </div>
    <div class="row align-items-center justify-content-center mb-4 mt-4">
      <div class="row  align-items-center justify-content-center">


         <div class="col-12 text-center parrafo-class p-3 mb-1 color-text-gris" >
          {{$Empresa->texto_tiempo_respuesta_contacto}}
         </div>
       
         {{-- <img class="rounded-circle   imagen-contacto-chiac-al-lado-de-te-responderemos" src="{{url()}}/imagenes/Contacto/mauricio-costanzo-atención-comercial-por-desarrollo-páginas-web-software.jpg" alt="Image"> --}}
         
      </div>
      
    </div>
    
  </div>
</div>
@include('paginas.home.vue.Contacto.PartialLuegoEnvio')
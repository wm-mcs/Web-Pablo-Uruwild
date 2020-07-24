<div v-if="!se_envio" class="container">

  
 
  <div action="#" class="form mt-4 col-12 col-lg-10 p-2 p-lg-5 ml-auto mr-auto background-gris-0">
    <div class="row mb-4">
      
      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.name" type="text" class="input-text-class-secondary" placeholder="Nombre">
      </div>

      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.email" type="email" class="input-text-class-secondary" placeholder="Email ">
      </div>
    </div>

     <div class="row mb-4">
      <div class="form-group col-12">
      <input v-model="data_mensaje.pais" type="text" class="input-text-class-secondary" placeholder="¿De dónde eres? (País) ">
        
      </div>
    </div>

   

   
   @if(isset($Tour))
   @if($Tour->tipo_de_tour == 'tipo_de_tour')
       <div class="row mb-4 justify-content-end">
      <p class="col-12 text-bold -text-primary mb-4">¿Quieres hacer todo o parte del tour?</p>
      <div class="d-flex flex-row align-items-center  col-12 mb-2">
        <input class="m-0 mr-4" type="radio" name="" value="Todo" v-model="data_mensaje.presupuesto">
        <p class="color-text-gris m-0">Todo</p>
      </div>
      <div class="d-flex flex-row align-items-center  col-12 mb-2">
        <input class="m-0 mr-4" type="radio" name="" value="Algunas partes" v-model="data_mensaje.presupuesto">
        <p class="color-text-gris m-0">Algunas partes</p>
      </div>         
    </div>

    <div class="row mb-4 justify-content-end">

      <p class="col-12 text-bold -text-primary mb-4">Marca los que te identifique</p>

      <div class="d-flex flex-row align-items-center  col-12 mb-2">
        <input class="m-0 mr-4" type="checkbox" name="" value="Quiero solo ir a pescar" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Quiero solo ir a pescar</p>
      </div>
      <div class="d-flex flex-row align-items-center  col-12 mb-2">
        <input class="m-0 mr-4" type="checkbox" name="" value="Quiero ir a pescar y también hacer otras actividades" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Quiero ir a pescar y también hacer otras actividades</p>
      </div>
       <div class="d-flex flex-row align-items-center  col-12 mb-2">
        <input class="m-0 mr-4" type="checkbox" name="" value="Quiero hacer todo el tour" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Quiero hacer todo el tour</p>
      </div>
      <div class="d-flex flex-row align-items-center  col-12 mb-2">
        <input class="m-0 mr-4" type="checkbox" name="" value=">Quiero hacer alguna parte del tour" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Quiero hacer alguna parte del tour</p>
      </div>       
      
      
    </div>

   @elseif($Tour->tipo_de_tour == 'producto')

   @elseif($Tour->tipo_de_tour == 'turismo_rural')

   @endif
   @endif







     <div class="row mb-4">
      <div class="form-group col-12">
        <textarea v-model="data_mensaje.mensaje" class=" input-text-class-secondary" cols="30" rows="4"  placeholder="Si quieres agregar más información escríbela aquí"></textarea>
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
          Enviar solicitud para que alguien se ponga en contacto, me explique y me reserve <i class="fas fa-angle-double-right"></i>
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
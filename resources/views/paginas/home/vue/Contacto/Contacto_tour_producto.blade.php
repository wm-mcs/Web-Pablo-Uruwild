<div v-if="!se_envio" class="container">

  
 
  <div action="#" class="form">
    <div class="row mb-4">
      
      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.name" type="text" :class="classImput" placeholder="Nombre">
      </div>

      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.email" type="email" :class="classImput" placeholder="Email ">
      </div>
    </div>

     <div class="row mb-4">
      <div class="form-group col-12">
      <input v-model="data_mensaje.pais" type="text" :class="classImput" placeholder="¿De dónde eres? (País) ">
        
      </div>
    </div>

    <div class="row mb-4">
      <div class="form-group col-12">
       <input v-model="data_mensaje.que_vendes" type="text" :class="classImput" placeholder="¿Qué vendes/ofreces?">        
      </div>
    </div>

   
   
   

    <div class="row mb-4 justify-content-end">
      <p class="col-12 text-bold -text-primary mb-4">¿Con qué presupuesto cuentas?</p>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="radio" name="" value="Menos de 600 Dolares" v-model="data_mensaje.presupuesto">
        <p class="color-text-gris m-0">Menos de 500 Dolares</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="radio" name="" value="De 500 a 1000 Dolares" v-model="data_mensaje.presupuesto">
        <p class="color-text-gris m-0">De 500 a 1000 Dolares</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="radio" name="" value="De 1000 a 2000 Dolares" v-model="data_mensaje.presupuesto">
        <p class="color-text-gris m-0">De 1000 a 2000 Dolares</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="radio" name="" value="El presupuesto no es un problema" v-model="data_mensaje.presupuesto">
        <p class="color-text-gris m-0">El presupuesto no es un problema</p>
      </div>      
    </div>

    <div class="row mb-4 justify-content-end">

      <p class="col-12 text-bold -text-primary mb-4">¿Qué necesitas?</p>

      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Una página web personal" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Una página web personal</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Una página web para tu empresa" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Una página web para tu empresa</p>
      </div>
       <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Un e-commerce" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Un e-commerce </p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Asesoría para e-commerce" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Asesoría para e-commerce </p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Publicidad en Google" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Publicidad en Google</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Una página web a medida" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Una página web a medida</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Rediseño de página web" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Rediseño de página web</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Otro tipo de servicio de desarrollo web" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Otro tipo de servicio de desarrollo web</p>
      </div>
      
      
    </div>





     <div class="row mb-4">
      <div class="form-group col-12">
        <textarea v-model="data_mensaje.mensaje" class="border-primary" cols="30" rows="4" :class="classImput" placeholder="Explica de manera detallada qué necesitas"></textarea>
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
        <div v-else v-on:click="enviarMensaje" :class="classBoton" value="Enviar mensaje">
          Enviar solicitud ahora
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
       
         <img class="rounded-circle   imagen-contacto-chiac-al-lado-de-te-responderemos" src="{{url()}}/imagenes/Contacto/mauricio-costanzo-atención-comercial-por-desarrollo-páginas-web-software.jpg" alt="Image">
         
      </div>
      
    </div>
    
  </div>
</div>
@include('paginas.home.vue.Contacto.PartialLuegoEnvio')
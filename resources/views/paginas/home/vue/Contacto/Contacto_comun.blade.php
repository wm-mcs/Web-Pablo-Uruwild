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
        <textarea v-model="data_mensaje.mensaje" cols="30" rows="2" :class="classImput" placeholder="Mensaje"></textarea>
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
    {{-- <div class="row">
       <div class="col-md-12 text-center parrafo-class p-3 mb-4 " :class="classTextColor" >
        Te responderé en menos de 24hs
      </div>
      
    </div> --}}
    
  </div>
</div>
<div v-else class="section-title text-centermb-5" :class="classTextColor">
  <h2 class="section-title text-center text-white mb-5">@{{mensaje_se_envio}}</h2>
</div>
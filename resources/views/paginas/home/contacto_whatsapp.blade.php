<a v-on:click="contacto_evento" class="contacto-whatsapp-contenedor" href="{{$Empresa->link_whatsapp_send}}" target="_blank">
  <img data-src="{{$Empresa->img_atencion}}" class="contacto-whatsapp-img">

  <div class="contiene-aclaracio-y-resouesta">
    <div class="aclaracion-de-respuesta">                      
        Normalmente respondo en <span class="text-success">menos de 1 hora</span> 
    </div>
    <div class="contacto-whatsapp-texto">
    Hola ¿en qué te puedo ayudar? 
    </div> 
  </div>
</a>
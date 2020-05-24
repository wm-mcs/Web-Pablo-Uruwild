Vue.component('contacto-component' ,
{
props:['empresa','color']
,  
data:function(){
    return {
      data_mensaje: {name:'',
                      email:'',
                      mensaje:'',
                      presupuesto:'',
                      que_vendes:'',
                      pais:'',
                      que_necesitas:[]},


      se_envio:false,
      mensaje_se_envio:'',
      errores:false,
      cargando:false
    }
}, 

methods:{

enviarMensaje:function(){
  var data = this.data_mensaje;

  var url  = '/post_contacto_form';
  var vue  = this;

  this.cargando = true;

   axios.post(url,data).then(function (response){  
            var data = response.data;  
            

            if(data.Validacion == true)
            {  
               gtag('event', 'contacto');
               vue.se_envio = true; 
               vue.mensaje_se_envio = data.Validacion_mensaje; 
               $.notify(response.data.Validacion_mensaje, "success");
               vue.cargando = false;
            }
            else
            {
              $.notify(response.data.Validacion_mensaje, "error");
              vue.cargando = false;
              vue.errores = data.Errores;
            }
           
           }).catch(function (error){

                $.notify(error, "error");  
                vue.cargando = false;   
            
           });

}

},
computed:{
classImput:function(){
  return {
    'input-text-class-primary': this.color == 'input_color_primary',
    'input-text-class-white': this.color == 'input_color_white'
   }

  
},
classBoton:function(){
  return {
    'Boton-Fuente-Chica':true,
    'Boton-Primario-Relleno': this.color == 'input_color_primary',
    'Boton-Blanco': this.color == 'input_color_white',
    'Boton-Disable': !this.se_puede_enviar
   }
},
classTextColor:function(){
  return {
    
    'text-primary': this.color == 'input_color_primary',
    'text-white': this.color == 'input_color_white',
   }
},
classCargadorColor:function(){
  return {
    
   
    'cargador_white': this.color == 'input_color_white',
   }
},
se_puede_enviar:function(){
   if( this.data_mensaje.name != '' && this.data_mensaje.email != '' && this.data_mensaje.mensaje != '')
   {
     return true;
   }
   else
   {
    return false;
   }




}
}

});
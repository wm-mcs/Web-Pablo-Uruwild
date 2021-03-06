Vue.component('mostrar-mas-o-menos' ,
{

props:['texto_mostrar_mas','texto_mostrar_menos','texto','cantidad_inicial','tipo']
,  

data:function(){
    return {
         muestra:false

    }
}, 

watch:{ 

  

   
},
methods:{
 mostrar:function()
  {
    if(this.muestra == true)
    {
     this.muestra = false;
    }
    else
    {
     this.muestra =  true;
    }
  }
},
computed:{

descripcion:function(){

  if(this.muestra == false)
  {
    let puntitos = '...';

    if(this.texto.length < this.cantidad_inicial)
    {
      puntitos = '';
    }


    return this.texto.slice(0,this.cantidad_inicial) + puntitos;
    
  }

  return this.texto;
  
},
tipo_hover_element:function()
{
  if(this.tipo == 'click-on-element')
  {
    return true;
  }

},


},
template:'
<span>
  
  <span v-if="tipo_hover_element">
    <span v-on:click="mostrar" class="w-100 cursor-pointer" >@{{descripcion}}</span>
  </span>
  <span v-else>
    <span class="w-100" >@{{descripcion}}</span>
    <span v-if="!muestra" v-on:click="mostrar" class="d-block parrafo-class w-100 py-3 simula-link mt-1">@{{texto_mostrar_mas}} <i class="fas fa-chevron-down"></i></span>  
    <span v-else v-on:click="mostrar" class="d-block parrafo-class w-100 py-3 simula-link mt-1">@{{texto_mostrar_menos}} <i class="fas fa-chevron-up"></i></span>
  </span>
   

</span>
'

}




);
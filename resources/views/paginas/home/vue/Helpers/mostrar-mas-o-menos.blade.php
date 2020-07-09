Vue.component('mostrar-mas-o-menos' ,
{

props:['texto','cantidad_inicial']
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
    return this.texto.slice(0,this.cantidad_inicial) + '...';
  }

  return this.texto;
  
}


},
template:'
<span>
  
  <span class="w-100" >@{{descripcion}}</span>
  
  <slot name="botones"></slot>
 

</span>
'

}




);
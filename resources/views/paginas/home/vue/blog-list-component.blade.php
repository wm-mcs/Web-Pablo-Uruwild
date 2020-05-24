Vue.component('blog-list-component' ,
{

props:['empresa','blog']
,  

data:function(){
    return {
         data:'hola'

    }
}, 

watch:{ 

  

   
},
methods:{
},
template:'
<div class="col-md-6 col-lg-4 mb-4">
            <div class="servicio_lista service">
              <a :href="blog.route">
                <img :src="blog.url_img_portada" :alt="blog.descripcion_breve" class="servicio_lista_imagen">
              </a>              
              <div class="p-3 mt-2">
                <h3 class="sub-titulos-class text-color-primary font-secondary mb-2">
                  <a :href="blog.route">
                    @{{blog.name}}
                  </a>                
                </h3>
                <p class="color-text-gris mb-2 ">
                 @{{blog.descripcion_breve}}
                </p>
                <p>
                  <a  :href="blog.route"> Leer más  <i class="fas fa-chevron-right"></i></a>
                </p>                
              </div>
            </div>
          </div>
'

}




);
var app = new Vue({
    el: '#app',    
    data:{
      empresa: {!! json_encode($Empresa) !!},
      blogs:   {!! json_encode($blogs) !!},
      cargando:false,
      scrolled:0,
      windowWidth: window.innerWidth,
      variables:{
                  input_color_primary:'input_color_primary',
                  input_color_white:'input_color_white'
                }

      

    },
    mounted: function mounted () {        
      this.$nextTick(() => {
      window.addEventListener('resize', () => {
        this.windowWidth = window.innerWidth
      });
      })
     


    },

    methods:{ 

    cerrarModal:function(id_modal){

     $(id_modal).modal('hide');
     $('.modal-backdrop').remove();
    },   
    abrirModal:function(id_modal){
    var id_modal = '#'+id_modal;
    $(id_modal).appendTo("body").modal('show');
    },



    contacto_evento:function(){
      
      gtag('event', 'contacto');
    },



    se_muestra:function(valor){

    if(valor == '' || valor == null || valor == 'no')
    {
      return false;
    }
    else
    {
      return true;
    }
    },  
    handleScroll: function() {
        
          this.scrolled = window.scrollY > 0;
          
         

      },    
    
    },
    computed:{
       mostrar_logo_nav:function(){    

        if(this.scrolled)
        {
          return true;
        }  
        else
        {
         return false;
        }
      },
      mostrar_para_grande:function(){
        if(this.windowWidth > 990)
        {
          return true;
        }  
        else
        {
         return false;
        }
      },
      mostrar_para_celuar:function(){
       if(this.windowWidth <= 990)
        {
          return true;
        }  
        else
        {
         return false;
        }
      }
    },
    watch: {
    windowWidth(newHeight, oldHeight) {
     window.addEventListener('resize', () => {
      this.windowWidth = window.innerWidth
    });
    }
    },  

     
      created () {
        window.addEventListener('scroll', this.handleScroll);
      },
      destroyed () {
        window.removeEventListener('scroll', this.handleScroll);
      }

     

   

   });
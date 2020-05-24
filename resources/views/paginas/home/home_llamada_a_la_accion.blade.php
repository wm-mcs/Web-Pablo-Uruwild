<div class="contiene-llama-a-la-accion">
    <div class="flex-row-center flex-justifice-space-around flex-wrap">
        
        <img data-src="{{ url() }}/imagenes/team/1.jpg" class="img-previa-boton"> 
        <div class="previo-boton">
            Contáctame ahora !
        </div>

        <a  href="https://api.whatsapp.com/send?phone={{$Empresa->numero_whatsapp_ya_arreglado}}&text=Hola!">
                      <div class="boton-simple">
                       {{$Empresa->celular_empresa}} <i class="fab fa-whatsapp"></i>
                      </div>
                    </a>
    </div>
</div>
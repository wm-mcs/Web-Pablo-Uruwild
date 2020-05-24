<section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Blog</h2>
            <hr class="my-4">
            <h4 class="text-muted mb-4">Ultimos artículos</h4>
          </div>
        </div>

      </div>
      <div class="get_width_100 flex-row-column">
         <div class="contenedor-listado-noticias">

          @foreach($Noticias as $Noticia)
          
            @include('paginas.noticias.noticias_lista_individual')   

          @endforeach


          <a class="btn btn-primary btn-xl  Slider_cabecera_boton_contacto" href="{{route('get_pagina_noticias_listado')}}">Ver todas</a>

        </div>
      </div>
       
       
      
</section>
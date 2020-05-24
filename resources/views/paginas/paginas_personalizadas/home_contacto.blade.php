<div  class="p-5 background_img img_contacto-home d-flex flex-row align-items-center justify-content-center" id="contacto_home">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-lg-end">
      <div class="col-lg-6">
        <div class="container">
          <div class="row">
            <h3 class="col-12 titulos-class text-color-primary mb-1 text-center">Contáctate ahora</h3>
            <p class="col-12 text-color-primary parrafo-class mb-4 text-center">Para contactarte rellenar el formulario de aquí abajo </p>
          </div>
        </div>
        <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
          @include('paginas.home.vue.Contacto.Contacto_comun')
        </contacto-component>
      </div>
    </div>
  </div>
</div>
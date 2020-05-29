
<div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
  <div class="blog_entry">
    <a href=" {{$Entidad->route_admin}}">
      <img src="{{$Entidad->url_img_portada}}" alt="Image" class="img-de-blog-miniatura">  
    </a>
    <div class="p-4 bg-white">
      <h3><a href=" {{$Entidad->route_admin}}">{{$Entidad->name}}</a></h3>
      <p>{{$Entidad->descripcion_breve}}</p>
      <p class="more"><a href=" {{$Entidad->route_admin}}">Editar  <i class="fas fa-edit"></i> </a></p>
    </div>
  </div>
</div>
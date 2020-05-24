<div class="row">
  @foreach($blogs_relacionados as $blog)
    <div class="col-md-6 mb-5 mb-4 col-lg-4">
      <div class="blog_entry">
        <a href="{{$blog->route}}">
          <img src="{{$blog->url_img_portada}}" alt="Image" class="img-de-blog-miniatura">  
        </a>
        <div class="p-4 bg-white">
          <h3><a href="{{$blog->route}}">{{$blog->name}}</a></h3>
          <span class="date">{{$blog->fecha_personalizada}}</span>
          <p>{{$blog->descripcion_breve}}</p>
          <p class="more"><a href="{{$blog->route}}">Leer más</a></p>
        </div>
      </div>
    </div>
  @endforeach
</div>
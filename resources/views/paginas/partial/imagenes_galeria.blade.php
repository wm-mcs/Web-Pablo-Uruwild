@if($Entidad->imagenes->count() > 1)
<div class="row justify-content-center mb-5 mx-0">
    <div class="col-12 col-lg-9 p-1">
        <div class="row mx-0">
          @foreach($Entidad->imagenes as $Imagen)
            <a href="{{$Imagen->url_img}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-4 col-lg-2 p-2 mb-2 d-flex flex-column align-items-center">
                <img src="{{$Imagen->url_img_chica}}" class="img-fluid">
            </a>
          @endforeach
        </div>
    </div>
  </div>
 @endif

<?php 

//Noticias
Route::get('/blog' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_noticias_listado',
  'as'   => 'get_pagina_noticias_listado']
);
     
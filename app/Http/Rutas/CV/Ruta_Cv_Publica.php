<?php 

//Ruta de Home Panel Admin
Route::get('curriculum-vitae',
[
  'uses'  => 'Publicas\Paginas_Controller@get_pagina_cv',
  'as'    => 'get_pagina_cv'
]);
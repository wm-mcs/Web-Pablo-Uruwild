<?php 

Route::get('borrar_esta_imagen{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Imagen_Controllers@borrar_esta_imagen',
  'as'    => 'borrar_esta_imagen'
]);

Route::get('establecer_como_principal{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Imagen_Controllers@establecer_como_principal',
  'as'    => 'establecer_como_principal'
]);


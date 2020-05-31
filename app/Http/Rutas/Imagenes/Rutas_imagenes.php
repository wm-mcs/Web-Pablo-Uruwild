<?php 

Route::get('borrar_esta_imagen{id}{nombre_campo}',
[
  'uses'  => 'Admin_Empresa\Admin_Imagen_Controllers@borrar_esta_imagen',
  'as'    => 'borrar_esta_imagen'
]);

Route::get('establecer_como_principal{id}-{nombre_campo}',
[
  'uses'  => 'Admin_Empresa\Admin_Imagen_Controllers@establecer_como_principal',
  'as'    => 'establecer_como_principal'
]);


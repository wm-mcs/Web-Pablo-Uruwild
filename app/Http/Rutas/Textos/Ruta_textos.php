<?php 

Route::get('get_admin_textos',
[
  'uses'  => 'Admin_Empresa\Admin_Textos_Controllers@get_admin',
  'as'    => 'get_admin_textos'
]);


Route::get('get_admin_textos_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Textos_Controllers@get_admin_crear',
  'as'    => 'get_admin_textos_crear'
]);
    

Route::post('set_admin_textos_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Textos_Controllers@set_admin_crear',
  'as'    => 'set_admin_textos_crear'
]);

Route::get('get_admin_textos_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Textos_Controllers@get_admin_editar',
  'as'    => 'get_admin_textos_editar'
]);

Route::patch('set_admin_textos_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Textos_Controllers@set_admin_editar',
  'as'    => 'set_admin_textos_editar'
]);



<?php 

Route::get('get_admin_productos_especiales',
[
  'uses'  => 'Admin_Empresa\Admin_Productos_Especiales_Controllers@get_admin',
  'as'    => 'get_admin_productos_especiales'
]);

Route::get('get_admin_productos_especiales_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Productos_Especiales_Controllers@get_admin_crear',
  'as'    => 'get_admin_productos_especiales_crear'
]);

Route::post('set_admin_productos_especiales_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Productos_Especiales_Controllers@set_admin_crear',
  'as'    => 'set_admin_productos_especiales_crear'
]);

Route::get('get_admin_productos_especiales_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Productos_Especiales_Controllers@get_admin_editar',
  'as'    => 'get_admin_productos_especiales_editar'
]);

Route::patch('set_admin_productos_especiales_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Productos_Especiales_Controllers@set_admin_editar',
  'as'    => 'set_admin_productos_especiales_editar'
]);
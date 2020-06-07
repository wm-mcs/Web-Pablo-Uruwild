<?php 

Route::get('get_admin_tours',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@get_admin',
  'as'    => 'get_admin_tours'
]);

Route::get('get_admin_tours',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@get_admin_crear',
  'as'    => 'get_admin_tours'
]);

Route::post('set_admin_tours',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@set_admin_crear',
  'as'    => 'set_admin_tours'
]);

Route::get('get_admin_tours{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@get_admin_editar',
  'as'    => 'get_admin_tours'
]);

Route::patch('set_admin_tours{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@set_admin_editar',
  'as'    => 'set_admin_tours'
]);
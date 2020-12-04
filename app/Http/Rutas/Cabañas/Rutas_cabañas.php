<?php 

Route::get('get_admin_cabañas',
[
  'uses'  => 'Admin_Empresa\Admin_Cabaña_Controllers@get_admin_cabañas',
  'as'    => 'get_admin_cabañas'
]);

Route::get('get_admin_cabañas_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Cabaña_Controllers@get_admin_cabañas_crear',
  'as'    => 'get_admin_cabañas_crear'
]);

Route::post('set_admin_cabañas_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Cabaña_Controllers@set_admin_cabañas_crear',
  'as'    => 'set_admin_cabañas_crear'
]);

Route::get('get_admin_cabañas_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Cabaña_Controllers@get_admin_cabañas_editar',
  'as'    => 'get_admin_cabañas_editar'
]);

Route::patch('set_admin_cabañas_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Cabaña_Controllers@set_admin_cabañas_editar',
  'as'    => 'set_admin_cabañas_editar'
]);

Route::patch('delet_cabaña{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Cabaña_Controllers@delet_cabaña',
  'as'    => 'delet_cabaña'
]);


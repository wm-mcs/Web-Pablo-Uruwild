<?php 

Route::get('get_admin_actividades',
[
  'uses'  => 'Admin_Empresa\Admin_Actividad_Controllers@get_admin',
  'as'    => 'get_admin_actividades'
]);

Route::get('get_admin_actividades_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Actividad_Controllers@get_admin_crear',
  'as'    => 'get_admin_actividades_crear'
]);

Route::post('set_admin_actividades_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Actividad_Controllers@set_admin_crear',
  'as'    => 'set_admin_actividades_crear'
]);

Route::get('get_admin_actividades_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Actividad_Controllers@get_admin_editar',
  'as'    => 'get_admin_actividades_editar'
]);

Route::patch('set_admin_actividades_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Actividad_Controllers@set_admin_editar',
  'as'    => 'set_admin_actividades_editar'
]);
<?php 

Route::get('get_admin_trayectorias',
[
  'uses'  => 'Admin_Empresa\Admin_Trayectorias_Controllers@get_admin_trayectorias',
  'as'    => 'get_admin_trayectorias'
]);

Route::get('get_admin_trayectoria_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Trayectorias_Controllers@get_admin_trayectoria_crear',
  'as'    => 'get_admin_trayectoria_crear'
]);

Route::post('set_admin_trayectoria_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Trayectorias_Controllers@set_admin_trayectoria_crear',
  'as'    => 'set_admin_trayectoria_crear'
]);

Route::get('get_admin_trayectoria_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Trayectorias_Controllers@get_admin_trayectoria_editar',
  'as'    => 'get_admin_trayectoria_editar'
]);

Route::patch('endif{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Trayectorias_Controllers@set_admin_trayectoria_editar',
  'as'    => 'set_admin_trayectoria_editar'
]);
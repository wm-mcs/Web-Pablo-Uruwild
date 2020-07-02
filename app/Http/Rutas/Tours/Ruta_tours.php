<?php 

Route::get('get_admin_tours',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@get_admin',
  'as'    => 'get_admin_tours'
]);

      // R u t a   d e   l o s   p r o d u c t o s   e s p e c i a l e s 
      Route::get('get_admin_productos_especiales',
      [
        'uses'  => 'Admin_Empresa\Admin_Producto_Especial_Controllers@get_admin',
        'as'    => 'get_admin_productos_especiales'
      ]);

      // R u t a   d e  t u r i s m o   r u r a l  
      Route::get('get_admin_turismo_rural',
      [
        'uses'  => 'Admin_Empresa\Admin_Turismo_Rural_Controllers@get_admin',
        'as'    => 'get_admin_turismo_rural'
      ]);

Route::get('get_admin_tours_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@get_admin_crear',
  'as'    => 'get_admin_tours_crear'
]);

      // R u t a   d e   l o s   p r o d u c t o s   e s p e c i a l e s 
      Route::get('get_admin_productos_especiales_crear',
      [
        'uses'  => 'Admin_Empresa\Admin_Producto_Especial_Controllers@get_admin_crear',
        'as'    => 'get_admin_productos_especiales_crear'
      ]);

      // R u t a   d e  t u r i s m o   r u r a l 
      Route::get('get_admin_turismo_rural_crear',
      [
        'uses'  => 'Admin_Empresa\Admin_Turismo_Rural_Controllers@get_admin_crear',
        'as'    => 'get_admin_turismo_rural_crear'
      ]);

Route::post('set_admin_tours_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@set_admin_crear',
  'as'    => 'set_admin_tours_crear'
]);

Route::get('get_admin_tours_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@get_admin_editar',
  'as'    => 'get_admin_tours_editar'
]);

Route::patch('set_admin_tours_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Tours_Controllers@set_admin_editar',
  'as'    => 'set_admin_tours_editar'
]);
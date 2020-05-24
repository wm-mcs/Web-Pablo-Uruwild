<?php 

Route::get('get_admin_teams',
[
  'uses'  => 'Admin_Empresa\Admin_Team_Controllers@get_admin_teams',
  'as'    => 'get_admin_teams'
]);

Route::get('get_admin_team_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Team_Controllers@get_admin_team_crear',
  'as'    => 'get_admin_team_crear'
]);

Route::post('set_admin_team_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Team_Controllers@set_admin_team_crear',
  'as'    => 'set_admin_team_crear'
]);

Route::get('get_admin_team_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Team_Controllers@get_admin_team_editar',
  'as'    => 'get_admin_team_editar'
]);

Route::patch('set_admin_team_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Team_Controllers@set_admin_team_editar',
  'as'    => 'set_admin_team_editar'
]);
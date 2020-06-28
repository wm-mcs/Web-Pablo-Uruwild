<?php 

Route::get('get_admin_portadas_de_paginas',
[
  'uses'  => 'Admin_Empresa\Admin_Portadas_De_Pagina_Controllers@get_admin',
  'as'    => 'get_admin_portadas_de_paginas'
]);      

Route::get('get_admin_portadas_de_paginas_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Portadas_De_Pagina_Controllers@get_admin_crear',
  'as'    => 'get_admin_portadas_de_paginas_crear'
]);

Route::post('set_admin_portadas_de_paginas_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Portadas_De_Pagina_Controllers@set_admin_crear',
  'as'    => 'set_admin_portadas_de_paginas_crear'
]);

Route::get('get_admin_portadas_de_paginas_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Portadas_De_Pagina_Controllers@get_admin_editar',
  'as'    => 'get_admin_portadas_de_paginas_editar'
]);

Route::patch('set_admin_portadas_de_paginas_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Portadas_De_Pagina_Controllers@set_admin_editar',
  'as'    => 'set_admin_portadas_de_paginas_editar'
]);
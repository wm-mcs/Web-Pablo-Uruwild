<?php 




require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';


// N o t i c i a   I n d i v i d u a l 
Route::get('/blog/{name}/{id}' , [                    
'uses' => 'Publicas\Paginas_Controller@get_pagina_noticia_individual',
'as'   => 'get_pagina_noticia_individual']
)/*->where(['id'  => '[0-9]+',
        'name'=> '^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$'])*/;



// H o m e
Route::get('/' , [                    
  'uses' => 'Publicas\Home_Public_Controller@get_home',
  'as'   => 'get_home']
);


// C o n t a c t o
Route::get('/Contacto' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
  'as'   => 'get_pagina_contacto']
);









// S e r v i c i o s
Route::get('/Servicios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_servicios',
  'as'   => 'get_pagina_servicios']
);

// S o b r e
Route::get('/sobre-Uruwild' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_quien_es',
  'as'   => 'get_pagina_quien_es']
);



// B l o g
require __DIR__ . '/Noticias/Rutas_Noticias_Publicas.php';

// C i r c u i t o  s
require __DIR__ . '/Tours/Ruta_tours_publicas.php'; 

// C a b a ñ a s 
require __DIR__ . '/Cabañas/Rutas_cabañas_publica.php'; 


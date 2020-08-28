<?php 




require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';


// N o t i c i a   I n d i v i d u a l 
Route::get('/blog/{name}/{id}' , [                    
'uses' => 'Publicas\Paginas_Controller@get_pagina_noticia_individual',
'as'   => 'get_pagina_noticia_individual']
)/*->where(['id'  => '[0-9]+',
        'name'=> '^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$'])*/;


Route::group(['middleware' => 'lenguaje'],function()
{
  // H o m e
  Route::get('/' , [                    
    'uses' => 'Publicas\Home_Public_Controller@get_home',
    'as'   => 'get_home']
  );

  // H o m e   c o n   l e n g u a j e  
  Route::get('/{lenguaje}' , [                    
    'uses' => 'Publicas\Home_Public_Controller@get_home',
    'as'   => 'get_home_con_lenguaje']
  );

  // C i r c u i t o  s
  require __DIR__ . '/Tours/Ruta_tours_publicas.php'; 

  // C a b a ñ a s 
  require __DIR__ . '/Cabañas/Rutas_cabañas_publica.php'; 
  
});  


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
Route::get('/{lenguaje}/sobre-Uruwild' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_quien_es',
  'as'   => 'get_pagina_quien_es']
);



// B l o g
require __DIR__ . '/Noticias/Rutas_Noticias_Publicas.php';



// C a b a ñ a s 
require __DIR__ . '/Cabañas/Rutas_cabañas_publica.php'; 


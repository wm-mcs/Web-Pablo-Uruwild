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

Route::get('/Tours' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_tours',
  'as'   => 'get_pagina_tours']
);




// S e r v i c i o s
Route::get('/Servicios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_servicios',
  'as'   => 'get_pagina_servicios']
);

// Q u i é n   e s   L a u r a 
Route::get('/Quién-es-Laura-Jodral-Garcia' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_quien_es',
  'as'   => 'get_pagina_quien_es']
);



// B l o g
require __DIR__ . '/Noticias/Rutas_Noticias_Publicas.php';

// C i r c u i t o  s
require __DIR__ . '/Tours/Ruta_tours_publicas.php'; 


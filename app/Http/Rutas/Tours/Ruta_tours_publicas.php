<?php 


Route::get('/{lenguaje}/uruwild/{name}/{id}' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_tour_individual',
  'as'   => 'get_pagina_tour_individual']
)/*->where(['id'  => '[0-9]+',
        'name'=> '^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$'])*/;

Route::get('/{lenguaje}/tours' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_tours',
  'as'   => 'get_pagina_tours']
);

Route::get('/{lenguaje}/especiales' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_productos',
  'as'   => 'get_pagina_productos']
);

Route::get('/{lenguaje}/turismo-rural-en-uruguay' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_turismo_rural',
  'as'   => 'get_pagina_turismo_rural']
);


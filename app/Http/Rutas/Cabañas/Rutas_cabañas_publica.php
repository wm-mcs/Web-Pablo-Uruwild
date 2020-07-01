<?php 


Route::get('/cabañas/{name}/{id}' , [                    
'uses' => 'Publicas\Paginas_Controller@get_pagina_cabaña_individual',
'as'   => 'get_pagina_cabaña_individual']
)/*->where(['id'  => '[0-9]+',
        'name'=> '^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$'])*/;
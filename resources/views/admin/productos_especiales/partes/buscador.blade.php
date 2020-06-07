{!! Form::model(Request::all(),['route'   =>$Route_busqueda, 
                'method'  => 'GET',
                'class'   => 'col-6 col-lg-6',
                'role'    => 'search' ])                             !!}
  <div class="col-12 d-flex align-items-center">
	  {!! Form::text('name', null , ['class'       => 'input-text-class-primary col-10', 
	                                 'placeholder' => 'Buscar'])        !!}
	 

	  <button type="submit" class="Boton-Fuente-Chica Boton-Primario-Sin-Relleno-Ni-Borde col-2">
	    <i class="fas fa-search"></i>
	  </button>
  </div>
{!! Form::close() !!}
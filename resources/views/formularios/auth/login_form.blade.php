

  {!! Form::open(             ['route' => 'auth_login_post',
                            'method'   => 'post',
                            'files'    => true,
                            'class'    => 'get_width_100'
                            ])               !!}

            
<div class="col-12 d-flex flex-column align-items-center background-gris-0 p-3">
<div class="col-11  p-2 p-lg-5 ">
            <div class="form-group mb-4">
              
              <div class="cols-sm-10">
                <div class="d-flex flex-column align-items-center">
                  
                  
                  
                  {!! Form::text('email', null ,['class'       => 'input-text-class-secondary',
                                                 'id'          => 'username',
                                                 'placeholder' => 'Escribe tu email']) !!}
                </div>
              </div>
            </div>

            <div class="form-group mb-4">
              
              <div class="cols-sm-10">
                <div class="flex-row-center">
                              
                  {!! Form::password('password', [ 'class'       => 'input-text-class-secondary',
                                                   'id'          => 'password',
                                                   'placeholder' => 'Escribe tu contraseña']) !!}
                </div>
              </div>
            </div>

            
              <button type="submit" class="Boton-Fuente-Chica
Boton-Secondary-Relleno mt-4">Ingresar</button>
           
            


    <hr>
   <div class="login-register">
                    <p class="text-center"><a href="{{route('password_recet_get')}}">Olvidé mi contraseña</a><!--  | <a href="{{route('register_get')}}">Aún no estoy registrado</a> --></p>
   </div>
   
</div>
</div>



{!! Form::close() !!}



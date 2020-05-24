




   <div class="contiene-listado-entidad">
            

            <div class="contiene-listado-entidad-sub-contenedor">
              <div  class="cintiene-listado-entidad-name">{{$Trayectoria->name}}</div> 

              <div class="atributo-con-distincion   @if($Trayectoria->tipo == 'experiencia')  atributo-distinguido @else atributo-distinguido-2 @endif     ">
                {{$Trayectoria->tipo}}
              </div>
              
               <div class="cintiene-listado-entidad-fecha">
                {{$Trayectoria->fecha_inicio_personalizada_formateada}} hasta  {{$Trayectoria->se_termino_fecha}}
               </div>

              <a href="{{$Trayectoria->route_admin}}" class="cintiene-listado-entidad-leer-mas">
                Editar  <i class="fas fa-edit"></i>
              </a>
            </div>
            

          </div>
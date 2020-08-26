<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Helpers\HelpersSessionLenguaje;
use Closure;

class Lenguaje 
{
    public function handle($Request, Closure $next)
    {          
      // I p   d e l   u s u a r i o
      $ip_del_user  = strval($_SERVER['REMOTE_ADDR']); 
      $data_user    = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_del_user)); 

      // S i   n o   h ay    s e s i ó n   d e t e c t o   I P   y   s e l e c c i o n o   i d i o m a   s e g ú n   r e g i ó n
      if(!Session::has('lenguaje'))
      {
        if($data_user->geoplugin_continentCode != 'SA')
        {
          // D i f e r e n t e   d e    S u d A m e r i c a 
          HelpersSessionLenguaje::getAndPutSessionLenguaje('EN');              
        }
        else
        {
          // S u d A m e r i c a 
          HelpersSessionLenguaje::getAndPutSessionLenguaje('ES'); 
        }
      }

      // S e   d e b e   v e r i f i c a r   e l   p a r a m e t r o   i d i o m a           
      HelpersSessionLenguaje::getAndPutSessionLenguaje(null,$Request->route('lenguaje'));

      return $next($Request);
    }
}

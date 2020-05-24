<?php

namespace App\Helpers;



class CurlHelper
{


    /**
     * Peticióm GET usando Curl a una Url con o sin Headers- Retorna array con http info y data
     */
    public function getUrlData($url,$headers = [])
    {
        $url = 'http://apptest.gestionsocios.com.uy/get_paises'; 
        $cliente = curl_init();
        curl_setopt($cliente, CURLOPT_URL,$url);
        curl_setopt($cliente, CURLOPT_HEADER, 0);
        if(count($headers) > 0 )
        {
            curl_setopt($cliente, CURLOPT_HTTPHEADER,$headers);
        }
        
        curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true); 

        $contenido = json_decode(curl_exec($cliente));
        $httpcode  = curl_getinfo($cliente, CURLINFO_HTTP_CODE);
        curl_close($cliente);

        

        return [ 'Data'         => $contenido, 
                 'Https_status' => $httpcode
               ];

        
    }
}
<?php

namespace App\Servicios;

use App\Repositorios\ImagenRepo;
use Illuminate\Support\Facades\Cache;




class ServiciosDeEntidades 
{

	
	// $nombre_del_campo: ejemplo -> cabaña_id, producto_id, marca_id ... etc	
	public static function getFotoPrincipal($nombre_del_campo,$valor_id)
	{		


		return Cache::remember('ImagenPrincipal'.$nombre_del_campo.$valor_id, 100000, function() use ($nombre_del_campo,$valor_id) {

            $Repo = new ImagenRepo();
		    return $Repo->get_imagen_principal_de_entidad_especifica($nombre_del_campo,$valor_id); 

        }); 		
	}


	// T o d a s   l a s   i m á g e n e s
	public static function getImagenes($nombre_del_campo,$valor_id)
	{


		dd($nombre_del_campo.$valor_id);
		return Cache::remember('Imagenes'.$nombre_del_campo.$valor_id, 100000, function() use ($nombre_del_campo,$valor_id) {

            $Repo = new ImagenRepo();

		    $Imagenes = $Repo->getImagenes($nombre_del_campo,$valor_id); 

		    return   $Imagenes;
		   

        });
	}

}
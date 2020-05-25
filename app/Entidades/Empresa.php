<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;




class Empresa extends Model
{

    protected $table ='empresa_datos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];
    protected $appends  = ['img_logo_horizontal_color',
                           'img_logo_horizontal_blanco',
                           'img_logo_cuadrado_blanco',
                           'img_logo_cuadrado_color'
                           ];

    /**
     * para verificar si no es null o no es cadena vacia
     */
    public function helper_verificar_nulidad($variable)
    {
      if(($variable != null) || ($variable != ''))
      {
        return $variable;
      }
      else
      {
        return 'no';
      }
    }


    //imagenes
    public function getImgLogoCuadradoColorAttribute()
    {        
        return url().'/imagenes/Empresa/logo-uruwild-cuadrado-color.png';
    }

     public function getPathImgLogoCuadradoColorAttribute()
     {        
        return public_path().'/imagenes/Empresa/logo-uruwild-cuadrado-color.png';
     }

    public function getImgLogoCuadradoBlancoAttribute()
    {        
        return url().'/imagenes/Empresa/logo-uruwild-cuadrado-blanco.png';
    }

     public function getPathImgLogoCuadradoBlancoAttribute()
     {        
        return public_path().'/imagenes/Empresa/logo-uruwild-cuadrado-blanco.png';
     }


   

    public function getImgLogoHorizontalColorAttribute()
    {        
       return url().'/imagenes/Empresa/logo-uruwild-horizonatal-color.png';
    }

      public function getPathImgLogoHorizontalColorAttribute()
      {
        return public_path(). '/imagenes/Empresa/logo-uruwild-horizonatal-color.png';
      }

     public function getImgLogoHorizontalBlancoAttribute()
    {        
       return url().'/imagenes/Empresa/logo-uruwild-horizonatal-blanco.png';
    }

      public function getPathImgLogoHorizontalBlancoAttribute()
      {
        return public_path(). '/imagenes/Empresa/logo-uruwild-horizonatal-blanco.png';
      }


 

 

 

    //datos
    public function getTelefonoEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->telefono);
    }

    public function getCelularEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->celular);
    }

    public function getDireccionEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->direccion);
    }

    public function getHorariosEmpresaAttribute()
    {       
    
        return $this->helper_verificar_nulidad($this->horarios_dias);
    }

    public function getEmailEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->email);
    }

    public function getSloganEmpresaAttribute()
    {        
    
        return $this->helper_verificar_nulidad($this->slogan);
    }

    public function getMisionEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->mision);
    }

    public function getVisionEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->vision);
    }

    public function getPalabrasClavesEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->palabras_claves);
    }

    //Socilaes

    public function getFacebookEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->facebook_url);
    }

    public function getInstagramEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->instagram_url);
    }

    public function getTwitterEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->twitter_url);
    }

    public function getLinkedinEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->linkedin_url);
    }

    public function getYoutubeEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->youtube_url);
    }

    public function getWhatsappEmpresaAttribute()
    {        
        return $this->helper_verificar_nulidad($this->Whatsapp_cel);
    }


    public function getLinkWhatsappSendAttribute()
    {

        $numero  = '598'. substr(trim($this->whatsapp_empresa),1);
        $mensaje = 'Hola';
        $url = 'https://api.whatsapp.com/send?phone='. $numero .'&text='. $mensaje;

        return $url;
    }




    



 

    


    public function getNumeroWhatsappYaArregladoAttribute()
    {
        return '598'. substr(trim($this->whatsapp_empresa),1);
    }



   



    

    
}
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
    protected $appends  = ['imagen_portada_url',
                           'img_atencion',
                           'imagen_quien_soy_url',
                           'imagen_quien_soy_url2',
                           'link_whatsapp_send',
                           'logo_easy_color',
                           'logo_easy_blanco'];

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
    public function getImgLogoCuadradoAttribute()
    {
        
        return url().'/imagenes/'.$this->logo_cuadrado;
    }


    public function getImagenPortadaUrlAttribute()
    {
        return url().'/imagenes/Empresa/home_imagen_portada.jpg';
    }  

    public function getImagenQuienSoyUrlAttribute()
    {
        return url().'/imagenes/Empresa/home_imagen_queien_soy.jpg';
    }

    public function getImagenQuienSoyUrl2Attribute()
    {
        return url().'/imagenes/Empresa/home_imagen_queien_soy2.jpg';
    }

    public function getImgLogoHorizontalAttribute()
    {
        
        return url().'/imagenes/'.$this->logo_horizontal;
    }

      public function getPathImgLogoHorizontalAttribute()
      {
        return public_path(). '/imagenes/'.$this->logo_horizontal;
      }

    public function getImgLogoVerticalAttribute()
    {
        
        return url().'/imagenes/'.$this->logo_vertical;
    }

    public function getImgCvPatchAttribute()
    {
        
        return url().'/imagenes/Cv/'.str_replace(' ' ,'-', $this->name ).'-cv-';
    }

    public function getImgAtencionAttribute()
    {
        
        return url().'/imagenes/Empresa/atencion.jpg';
    }

    public function getLogoEasyColorAttribute()
    {
        
        return url().'/imagenes/Empresa/logo-rectangular-easysocio-color.png';
    }

    public function getLogoEasyBlancoAttribute()
    {
        
        return url().'/imagenes/Empresa/logo-rectangular-easysocio-blanco.png';
    }

    public function getIsoLogoEasyColorAttribute()
    {
        
        return url().'/imagenes/Empresa/atencion.jpg';
    }

    public function getIsoLogoEasyBlancoAttribute()
    {
        
        return url().'/imagenes/Empresa/atencion.jpg';
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




    public function getContenidoCvRenderAttribute()
    {
        $cadena = $this->cv_text;

        //parrafos
        $cadena = str_replace('(P)' ,'<p class="cv-individual-p">', $cadena);
        $cadena = str_replace('(/P)' ,'</p>', $cadena);

        //titulos
        $cadena = str_replace('(T)' ,'<h2 class="cv-individual-section-titulo">', $cadena);
        $cadena = str_replace('(/T)' ,'</h2>', $cadena);

        //links
        $cadena = str_replace('(A)' ,'<a href="', $cadena);
        $cadena = str_replace('(/A)' ,'">', $cadena);
        $cadena = str_replace('(AT)' ,'', $cadena);
        $cadena = str_replace('(/AT)' ,'</a>', $cadena);

        //img
        $cadena = str_replace('(IMG)' ,'<img class="cv-img-secundarias" src="', $cadena);
        $cadena = str_replace('(/IMG)' ,'">', $cadena);

        $cadena = str_replace('(IMGT)' ,'<span class="cv-img-texto" >', $cadena);
        $cadena = str_replace('(/IMGT)' ,'</span>', $cadena);

         $cadena = str_replace('(YOU)' ,'<div class="video-responsive" > <iframe  src="https://www.youtube.com/embed/', $cadena);
        $cadena = str_replace('(/YOU)' ,'" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', $cadena);

        

        return htmlentities($cadena, ENT_QUOTES | ENT_IGNORE, "UTF-8"); 
    }



    public function getUrlImgCvPortadaAttribute()
    {
        return url().'/imagenes/Cv/'.str_replace(' ' ,'-', $this->name ).'-cv-1.jpg';
    }

    public function getCvAttribute()
    {        
        return $this->helper_verificar_nulidad($this->cv_text);
    }


    public function getNumeroWhatsappYaArregladoAttribute()
    {
        return '598'. substr(trim($this->whatsapp_empresa),1);
    }



    public function getPathUrlImgAttribute()
    {
        return public_path().'/imagenes/Empresa/'.$this->id.'-logo_empresa_socios'.'.png';
    }



    

    
}
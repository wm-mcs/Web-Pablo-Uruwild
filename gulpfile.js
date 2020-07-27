var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    

     
    
     mix.sass('credo_scss/style.scss','public/css/credo.css'); 
     mix.sass('admin.scss','public/css'); 

     


    mix.scripts([
        
        'Template_creative/jquery.js',
        'Template_creative/bootstrap.bundle.js',
        'Customs/helper_generales.js',   
        'Customs/admin_eventos.js',
        'Plugins/Plug-lazyLoadXT.js'
       

       ],'public/js/admin.js');

   

     mix.scripts([
        
        
        
        'credo_js/jquery-3.3.1.min.js',
        /*'credo_js/jquery-ui.js',*/
       /* 'credo_js/popper.min.js',*/
        'credo_js/bootstrap.min.js',
      /*  'credo_js/owl.carousel.min.js',*/
        'credo_js/jquery.easing.1.3.js',
       /* 'credo_js/aos.js',
        'credo_js/jquery.fancybox.min.js',*/
        'credo_js/jquery.sticky.js',
        'credo_js/main.js', 
        'Plugins/Plug-lazyLoadXT.js',  
        'Plugins/Plug-Notify.js'

       

       ],'public/js/credo.js');


    elixir(function(mix) {
            mix.version(['css/credo.css','css/admin.css' ,'js/admin.js','js/credo.js']); 
    });

    
});

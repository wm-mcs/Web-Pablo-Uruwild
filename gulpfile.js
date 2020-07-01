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
    

     mix.sass('mixer.scss','public/css');
     mix.sass('creative_template_mixer.scss','public/creative_template_mixer.css'); 
     mix.sass('credo_scss/style.scss','public/css/credo.css'); 
     mix.sass('admin.scss','public/css'); 

     
    mix.scripts([
        
        'Template_creative/jquery.js',
        'Template_creative/bootstrap.bundle.js',
        'Template_creative/jquery.easing.js',        
        'Template_creative/scrollreveal.js',
        'Template_creative/jquery.magnific-popup.js',
        'Template_creative/creative.js',
        'Template_creative/jquery.easing.compatibility.js',
        'Plugins/Flickity.js',
        'Plugins/Plug-lazyLoadXT.js',
        'Customs/sliders.js',
        'Customs/team.js',
        'Customs/noticias_blog.js'


       ]);

    mix.scripts([
        
        'Template_creative/jquery.js',
        'Template_creative/bootstrap.bundle.js',
        'Customs/helper_generales.js',
        'Plugins/Plug-bootstrap-fileinput v4.3.7.js',
        'Customs/mis-file_input.js',
        'Customs/admin_eventos.js',
        'Plugins/Plug-lazyLoadXT.js'
       

       ],'public/js/admin.js');

     mix.scripts([
        
        'Vue/main-vue.js',
       

       ],'public/js/vue.js');

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
            mix.version(['css/mixer.css','css/credo.css','css/admin.css' ,'css/creative_template_mixer.css','js/all.js','js/admin.js','js/vue.js','js/credo.js']); 
    });

    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/build/fonts/bootstrap');
});

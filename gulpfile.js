const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass(['../../../node_modules/bootstrap-sass/assets/stylesheets/_bootstrap.scss'], 'public/css/app.css')
       .scripts(['../../../vendor/bower_components/jquery/dist/jquery.js', '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', '../../../vendor/bower_components/moment/moment.js', '../../../vendor/bower_components/fullcalendar/dist/fullcalendar.js'], 'public/js/app.js')
       .styles(['../../../vendor/bower_components/fullcalendar/dist/fullcalendar.css', '../../../vendor/bower_components/fullcalendar/dist/fullcalendar.print.css'], 'public/css/app.css');

});

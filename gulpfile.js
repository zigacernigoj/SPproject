var elixir = require('laravel-elixir');

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

elixir(function(mix) {


    mix.sass('app.scss', 'resources/css');

    mix.styles([
        'libs/bootstrap.min.css',
        'app.css',
        'my.css'
    ], null, 'resources/css');


    mix.styles([
        'libs/bootstrap.min.css',
        'home/home.css',
        'fonts.css'
    ], 'public/css/home', 'resources/css');

    mix.scripts([
        'libs/jquery.min.js',
        'libs/bootstrap.min.js'
    ], null, 'resources/js');

    mix.scripts([
        'libs/jquery.min.js',
        'libs/bootstrap.min.js',
        'home/home.js'
    ], 'public/js/home', 'resources/js');


});

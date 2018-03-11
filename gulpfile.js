var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/olympos/assets';
elixir.config.publicPath = 'themes/olympos/assets/compiled';


elixir(function(mix){
  // compiling styles
  mix.sass('style.scss');

  // compiling scripts
  mix.scripts([
    'jquery.js',
    'app.js'
  ]);

  // watching
  mix.livereload([
    'themes/olympos/assets/compiled/css/style.css',
    'themes/olympos/**/*.htm',
    'themes/olympos/assets/compiled/js/*.js'
  ])

})
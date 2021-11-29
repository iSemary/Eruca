const mix = require('laravel-mix');

const Dotenv = require('dotenv-webpack');


module.exports = {
  configureWebpack: {
    plugins: [
      new Dotenv()
    ]
  }
}

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/main.scss', 'public/css');

mix.minify('public/css/main.css');
mix.minify('public/css/app.css');
mix.minify('public/js/app.js');

mix.styles([
    'public/css/main.min.css',
    'public/css/app.min.css',
    ], 'public/css/all.css'
);
mix.minify('public/css/all.css');

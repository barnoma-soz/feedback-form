const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/assets/js').vue({ version: 3 });

mix.postCss('resources/css/app.css', 'public/assets/css', [
  //
]);

if (mix.inProduction()) {
  mix.version();
}

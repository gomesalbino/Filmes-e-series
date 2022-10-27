const mix = require('laravel-mix');




mix
.sass('resources/css/app.scss', 'public/css')
.sass('resources/css/style.scss', 'public/css/style.css')
.js('resources/js/app.js', 'public/js')
.postCss('resources/css/app.css', 'public/css', [
    require("tailwindcss"),
  ]);
 

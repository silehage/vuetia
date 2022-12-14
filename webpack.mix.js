// webpack.mix.js

let mix = require('laravel-mix')
// const tailwindcss = require('tailwindcss'); 
require('mix-tailwindcss');

mix.js('src/js/app.js', 'dist/js')
  .vue({ version: 3 })
  .postCss('src/css/app.css', 'css')
  .tailwind('./tailwind.config.js')
  .setPublicPath('dist')
  .version();

// mix.postCss('src/css/app.css', 'dist/css')
//   .tailwind('./tailwind.config.js')
//   .version();
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-06 11:40:18
 * @LastEditTime: 2021-03-06 16:19:47
 */
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css').version();

<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-06 11:40:17
 * @LastEditTime: 2021-03-16 15:43:07
 */

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//首页
Route::get('/', 'StaticPagesController@home')->name('home');
//帮助页
Route::get('/help', 'StaticPagesController@help')->name('help');
//关于页
Route::get('/about', 'StaticPagesController@about')->name('about');
//注册页
Route::get('signup', 'UsersController@create')->name('signup');
//用户相关
Route::resource('users', 'UsersController');
//登录页面
Route::get('login', 'SessionsController@create')->name('login');
//登录操作
Route::post('login', 'SessionsController@store')->name('login');
//退出操作
Route::delete('logout', 'SessionsController@destroy')->name('logout');
//用户激活
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');






<?php

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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/items', 'ItemsController');
Route::resource('/menus', 'MenusController');
Route::resource('/orders', 'OrdersController')->middleware('auth');
Route::post('/api/order', 'OrdersController@sessionOrderPut')->name('api.order');

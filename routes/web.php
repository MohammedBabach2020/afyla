<?php

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

Route::get('/','FrontController@index')->name('acceuil');
Route::get('/category/{category}','FrontController@cat')->name('cat');
Route::get('/product/{id}/{product}','FrontController@prod')->name('prod');
Route::get('/cart','FrontController@cart')->name('cart');
Route::get('/wish','FrontController@wish')->name('wish');
Route::get('/lv-admin','FrontController@login')->name('login');
Route::get('/lv/register','FrontController@register')->name('register');
Route::get('/thank-you','FrontController@thank')->name('thank');
Route::get('/address','FrontController@address')->name('address');
Route::get('/shop/{category}','FrontController@shop')->name('shop');
Route::get('/test','FrontController@test')->name('test');
Route::post('/search','FrontController@search')->name('search');


/********** Login **********/

Route::post('user/register','UserController@register')->name('confirm.register');
Route::post('user/login','UserController@login')->name('confirm.login');
Route::post('user/logout','UserController@logout')->name('logout');

/********** Login **********/

/********** Currency and countries and cookies **********/

Route::get('/currency/{id}/{currency}','RegionController@currency')->name('currency');
Route::get('/cookies/set','RegionController@setCookie')->name('setCookie');

/********** Currency and countries **********/

/********** Subscribes **********/

Route::post('subscribe','UserController@subscribe')->name('subscribe');

/********** Subscribes **********/

/********** Admin **********/

Route::get('/dashboard','AdminController@admin')->name('admin.index');
Route::get('/admin/products','AdminController@products')->name('admin.products')->middleware('adm');
Route::post('/add/products','ProductController@add')->name('add.products')->middleware('adm');
Route::post('/edit/products','ProductController@edit')->name('edit.products')->middleware('adm');
Route::delete('/delete/products','ProductController@delete')->name('delete.products')->middleware('adm');
Route::post('/trend/products','ProductController@trend')->name('trend.products')->middleware('adm');

Route::get('/admin/categories','AdminController@categories')->name('admin.categories')->middleware('adm');
Route::post('/add/categories','CategoryController@add')->name('add.categories')->middleware('adm');
Route::post('/edit/categories','CategoryController@edit')->name('edit.categories')->middleware('adm');
Route::delete('/delete/categories','CategoryController@delete')->name('delete.categories')->middleware('adm');

Route::get('/admin/users','AdminController@users')->name('admin.users')->middleware('adm');
Route::delete('/delete/users','UserController@delete')->name('delete.users')->middleware('adm');

Route::get('/admin/orders','AdminController@orders')->name('admin.orders')->middleware('adm');
Route::post('/confirm/orders','OrderController@confirm')->name('confirm.orders')->middleware('adm');

Route::get('/admin/infos','AdminController@infos')->name('admin.infos')->middleware('adm');
Route::post('/edit/infos','AdminController@editinfos')->name('edit.infos')->middleware('adm');

Route::post('/shipping','AdminController@shipping')->name('shipping')->middleware('adm');

/********** Admin **********/


/********** Users **********/

Route::get('/myprofil','UserController@index')->name('user.index')->middleware('usr');
Route::get('/user/orders','UserController@orders')->name('user.orders')->middleware('usr');
Route::get('/user/change_password','UserController@password')->name('user.password')->middleware('usr');
Route::get('/user/address','UserController@address')->name('user.address')->middleware('usr');
Route::post('/user/store/address','UserController@store')->name('user.store')->middleware('usr');
Route::get('/edit/address/{id}','UserController@editaddress')->name('editaddress')->middleware('usr');
Route::get('/delete/address/{id}','UserController@deleteaddress')->name('deleteaddress')->middleware('usr');
Route::post('/edit/users','UserController@edit')->name('edit.users')->middleware('usr');
Route::post('/edit/password/users','UserController@editpassword')->name('editpassword.users')->middleware('usr');

/********** Users **********/


/********** Cart **********/

Route::post('/cart/add','OrderController@add')->name('cart.add');
Route::post('/cart/addnow','OrderController@addnow')->name('cart.addnow');
Route::post('/cart/remove','OrderController@remove')->name('cart.remove');
Route::post('/cart/update','OrderController@update')->name('cart.update');
Route::post('/cart/checkout','OrderController@checkout')->name('checkout');

/********** Cart **********/

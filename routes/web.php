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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/home/fetch_data', 'HomeController@fetch_data');

Route::get('/home/action', 'HomeController@action')->name('live_search.action');

Route::get('/home/special', 'HomeController@special')->name('special');

Route::get('/home/remove', 'HomeController@removemenu')->name('remove_menu');

Route::post('/home', 'HomeController@addmenu')->name('add_menu');

Route::get('/home/categories', 'HomeController@categories');

Route::get('/home/delete', 'HomeController@deletefromcart')->name('deletefromcart');

Route::get('/home/add', 'HomeController@addtocart')->name('addtocart');

Route::get('/menu', 'MenuController@index')->name('menu');

Route::get('/gallery', 'GalleryController@index')->name('gallery');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/checkout', 'CheckoutController@index')->name('checkout');

Route::post('/payment', 'CheckoutController@payment')->name('payment');

Route::get('/products/{prod_name}', 'ProductController@index')->middleware('auth');

Route::post('/rate', 'ProductController@rate')->name('rate')->middleware('auth');

Route::post('/topup', 'HomeController@topup')->name('topup')->middleware('auth');

Route::get('/finishorder', 'HomeController@finish_order')->name('finish_order')->middleware('auth');

Route::get('/profile', 'HomeController@profile')->name('profile')->middleware('auth');

Route::post('/update', 'HomeController@update')->name('update')->middleware('auth');


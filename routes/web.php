<?php

strtoupper(substr(md5(microtime()), 0, 8));


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
Auth::routes();

Route::get('/', 'HomePageController@show')->name('home-page');

Route::get('/characters', 'CharactersController@index')->name('characters');
Route::get('/characters/{character}', 'CharactersController@show')->name('single-character');

Route::get('/chapters', 'ChaptersController@index')->name('chapters');
Route::get('/chapters/{chapter}', 'ChaptersController@show')->name('single-chapter');

Route::get('/mobile-app', 'MobileAppController@index')->name('mobile-app');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/store/products', 'StoreController@index')->name('store');
Route::get('/store/product/{product}', 'StoreController@show')->name('product');

Route::post('/shopping-cart/add', 'ShoppingCartController@add')->name('add-shopping-cart');

Route::get('/shopping-cart/view', 'ShoppingCartController@view')->name('cart');

Route::get('/api/cart/delete', 'ShoppingCartController@delete');

Route::get('/api/order/create', 'OrderController@create');
Route::post('/api/order/delete', 'OrderController@delete');

Route::get('/checkout/shipping-address/{order}', 'CheckoutController@showShippingAddress')->name('checkout-address');
Route::post('/checkout/shipping-address/{order}', 'CheckoutController@saveShippingAddress')->name('checkout-address');

Route::get('/checkout/shipping-option/{order}', 'CheckoutController@showShippingOption')->name('checkout-option');
Route::post('/checkout/shipping-option/{order}', 'CheckoutController@saveShippingOption')->name('checkout-option');

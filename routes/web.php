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
Auth::routes();

Route::get('/', 'HomePageController@show')->name('home-page');

Route::get('/characters', 'CharactersController@index')->name('characters');
Route::get('/characters/{character}', 'CharactersController@show')->name('single-character');

Route::get('/chapters', 'ChaptersController@index')->name('chapters');
Route::get('/chapters/{chapter}', 'ChaptersController@show')->name('single-chapter');

Route::get('/mobile-app', 'MobileAppController@index')->name('mobile-app');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/store', 'StoreController@index')->name('store');

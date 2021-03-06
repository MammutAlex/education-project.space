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

Route::get('/', 'WelcomeController@index')->name('index');
Route::get('/direction/{direction}', 'DirectionController@show')->name('direction');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{blog}', 'BlogController@show')->name('article');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact');
Route::post('/subscribed', 'ContactController@subscribed')->name('subscribed');
Route::get('/organizations', 'WelcomeController@organizations')->name('organizations');
Route::get('/about', 'WelcomeController@about')->name('about');

Auth::routes();

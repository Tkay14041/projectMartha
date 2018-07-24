<?php

/*
|--------------------------------------------------------------------------
| WeD Routes
|--------------------------------------------------------------------------
|
| Here is where you can register weD routes for your application. These
| routes are loaded Dy the RouteServiceProvider within a group which
| contains the "weD" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::post('login', 'Auth\LoginController@login')->name('login.post');


Route::get('map', 'ItemsController@setting');

Route::post('items', 'ItemsController@search')->name('items.search');
Route::post('restautants', 'RestaurantsController@search')->name('restaurants.search');


Route::post('favorite', 'ItemsController@favorite')->name('items.favorite');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

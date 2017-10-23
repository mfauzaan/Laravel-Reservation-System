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

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['web']], function () {
  Route::get('/', 'PagesController@getIndex');
  Route::get('book', 'PagesController@getBook');
  Route::post('/', 'PagesController@postIndex');
  Route::get('welcome', 'PagesController@getWelcome');
  Route::get('admin', 'HomeController@getAdmin');
  Route::resource('posts','PostController');
  Route::resource('activities','ActivityController');
  Route::resource('contacts','ContactController');
  Route::resource('bookings','BookingController');
});

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Contact', 'ContactController@Contact')->name('Contact');
Route::post('Contact', 'ContactController@sendMail');

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'post'], function () {
    Route::get('get_all', 'PostController@getAllPosts')->name('fetch_all');
    Route::post('/create_post', 'PostController@createPost')->name('create_post');
});

Route::get('post/create_post', function () {
    return view('BuatPameran');
});

Route::get('/Config', 'ConfigController@index');

Route::get('/home', 'HomeController@index')->name('home');

//rate
Route::get('rates', 'HomeController@rates')->name('rates');

Route::post('rates', 'HomeController@postPost')->name('rates.post');

Route::get('rates/{id}', 'HomeController@show')->name('rates.show');
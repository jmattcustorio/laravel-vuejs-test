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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homepage', 'PagesController@homepage')->name('homepage');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('user/create-user', 'PagesController@create')->name('create');
Route::post('/user/store', 'PagesController@store')->name('user.store');
Route::get('/user/edit/{id}', 'PagesController@edit')->name('user.edit');
Route::get('/user/delete/{id}','PagesController@destroy')->name('user.delete');;

/*
Route::get('/about-us',function(){
    return view('about-us');
});
Route::get('/homepage',function(){
    return view('homepagephp');
});
*/


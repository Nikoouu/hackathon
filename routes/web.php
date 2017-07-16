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

Route::get('/test','TestController@index4');

Route::get('/formulariousuario','TestController@index3');

Route::get('/test2','TestController@index2');

Route::get('/test3', 'TestController@index5');

Route::get ('/test4','TestController@index6');

Route::get ('/test5', 'TestController@index7');

Route::get('/test6', 'TestController@index8');



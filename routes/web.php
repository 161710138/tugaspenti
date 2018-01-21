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

Route::get('/test1','LatihanController@template');
Route::get('/test2','LatihanController@template2');
Route::get('/test3','LatihanController@template3');
Route::get('/test4','LatihanController@template4');
Route::get('/test5','LatihanController@template5');
Route::get('/test6','LatihanController@template6');



Auth::routes();

Route::get('/home', 'HomeController@template')->name('home');
Route::get('/tabel', 'LatihanController@template2')->name('tabel');


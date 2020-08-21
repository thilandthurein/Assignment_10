<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/register',function(){
	return view('studentreg');
});

Route::get('/regshow','StudentController@index')->name('regindex');
Route::get('/regshow/{id}','StudentController@show')->name('regshow');

Route::post('/regshow','StudentController@store')->name('regstore');
Route::put('/regshow/{id}','StudentController@update')->name('regupdate');
Route::delete('/regshow/{id}','StudentController@destroy')->name('regdestroy');
Route::delete('/regshow/d/{id}','StudentController@destroytime')->name('regdestroytime');




Route::get('disneyplus/list', 'DisneyplusController@index')->name('disneyplus.index');
Route::get('disneyplus', 'DisneyController@create')->name('disneyplus.create');
Route::post('disneyplus', 'DisneyController@store')->name('disneyplus.store');
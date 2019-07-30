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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'InicioController@index');
Route::get('/tabla1', 'InicioController@usuarios');
Route::get('/tabla2', 'InicioController@prediosview');
Route::get('/tabla3', 'InicioController@potrerosview');
Route::get('/tabla4', 'InicioController@ndviview');


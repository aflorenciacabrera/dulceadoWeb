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
Route::get('/producto/galeria','ProductoController@galeriaProducto');
Route::get('/producto','ProductoController@producto');
Route::get('producto/agregar','ProductoController@agregarProducto');
Route::post('producto/alta','ProductoController@altaProducto');
// Route::get('/menu','HomeController@menu');

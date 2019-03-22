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
// -------------Publico-------------------
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/producto/galeria','ProductoController@galeriaProducto');
// -------------Privado-------------------
Route::get('/producto','ProductoController@producto');
Route::get('producto/agregar','ProductoController@agregarProducto');
Route::post('producto/agregar','ProductoController@altaProducto');

Route::get('usuario/perfil','UsuarioController@perfil');
Route::get('usuario/perfil','UsuarioController@perfil');
    Route::put('usuario/perfil','UsuarioController@editarPerfil');
    Route::post('usuario/perfil', 'UsuarioController@update_avatar');
    Route::delete('usuario/perfil','UsuarioController@eliminarPerfil')->name("eliminarPerfil");
// Route::get('/menu','HomeController@menu');

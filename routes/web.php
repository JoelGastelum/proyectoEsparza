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

Route::get('/productos', 'ProductoController@index')->name('productos.index');

Route::post('/productos/store', 'ProductoController@Store')->name('productos.store');

Route::post('/productos/buscar', 'ProductoController@Buscar')->name('productos.buscar');

Route::get('/test', function () {
    phpinfo();
});
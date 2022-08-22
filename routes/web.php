<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Models\Producto;


Route::get('/ver_producto', 'App\Http\Controllers\ProductosController@index');

Route::get('/crear_producto', 'App\Http\Controllers\ProductosController@crear_producto');

Route::post('/crear_producto', 'App\Http\Controllers\ProductosController@crear_producto');

Route::delete('/producto/{id}', 'App\Http\Controllers\ProductosController@destroy');

Route::post('/buscar_productos', 'App\Http\Controllers\ProductosController@buscar');

Route::resource('/productos', 'App\Http\Controllers\ProductosController');

Route::get('/login', 'App\Http\Controllers\ProductosController@login');

Route::post('/producto/{id}', 'App\Http\Controllers\ProductosController@actualizar_producto');  //llegamos a la página "actualizar producto".

Route::put('/producto/{id}', 'App\Http\Controllers\ProductosController@update');
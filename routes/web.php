<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

Route::get('/ver_producto', 'App\Http\Controllers\ProductosController@index');

Route::get('/crear_producto', 'App\Http\Controllers\ProductosController@crear_producto');
Route::post('/crear_producto', 'App\Http\Controllers\ProductosController@crear_producto');



Route::delete('/producto/{id}', 'App\Http\Controllers\ProductosController@destroy');







Route::post('/buscar_productos', 'App\Http\Controllers\ProductosController@buscar');

Route::resource('/productos', 'App\Http\Controllers\ProductosController');

Route::get('/login', 'App\Http\Controllers\ProductosController@login');


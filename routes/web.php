<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TiendaController;

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




Route::get('/', function () {return view('welcome');});
Route::get('/login', [TiendaController::class, 'login']);
Route::get('/crear_producto', [TiendaController::class, 'crear_producto']);
Route::get('/ver_producto', [TiendaController::class, 'ver_producto']);
Route::get('/borrar_producto', [TiendaController::class, 'borrar_producto']);
Route::get('/actualizar_producto', [TiendaController::class, 'actualizar_producto']);


<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/create', [ProductoController::class, 'create']);
Route::post('/productos', [ProductoController::class, 'store']);

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/create', [EmpleadoController::class, 'create']);
Route::post('/empleados', [EmpleadoController::class, 'store']);

Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/proveedores/create', [ProveedorController::class, 'create']);
Route::post('/proveedores', [ProveedorController::class, 'store']);

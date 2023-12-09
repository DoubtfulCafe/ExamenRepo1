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


Route::get('/productos', [ProductoController::class, 'index'])->name('producto.inicio');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('producto.crear');
Route::post('/productos', [ProductoController::class, 'store'])->name('producto.store');

Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleado.inicio');
Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleado.crear');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleado.store');

Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.inicio');
Route::get('/proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.crear');
Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');

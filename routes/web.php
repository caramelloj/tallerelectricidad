<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\CustomerController;

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

Route::resource('/clientes', CustomerController::class); //metodo destroy y update no funcionan

Route::get('/borrar-cliente/{id}', 'App\Http\Controllers\CustomerController@destroy')->name('delete.customer');

Route::post('/buscar-cliente', [CustomerController::class, 'getCustomer'])->name('search.customer');

Route::get('/editar-cliente/{id}', [CustomerController::class, 'editCustomer'])->name('edit.customer');

Route::resource('/vehiculos', CarController::class);

Route::get('/borrar-vehiculo/{id}', 'App\Http\Controllers\CarController@destroy')->name('delete.vehicle');

Route::post('/buscar-automovil', [CarController::class, 'getCar'])->name('search.car');

Route::get('/editar-automovil/{id}', [CarController::class, 'editCar'])->name('edit.car');

Route::get('/reparacion/{id}',[RepairController::class, 'create'])->name('reparaciones.create');

Route::post('/agregar-reparacion', [RepairController::class, 'store'])->name('reparaciones.store');

Route::get('/listar-reparaciones', [RepairController::class, 'index'])->name('reparaciones.index');

Route::post('/buscar-reparacion', [RepairController::class, 'getRepair'])->name('search.repair');

Route::get('/listar-reparaciones/{id}', [RepairController::class, 'show'])->name('reparaciones.show');

Route::get('/imprimir-reparaciones/{patente}', [RepairController::class, 'dumpPdf'])->name('reparaciones.pdf');

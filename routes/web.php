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

Route::resource('/clientes', CustomerController::class);

Route::post('/buscar-cliente', [CustomerController::class, 'getCustomer'])->name('search.customer');

Route::resource('/vehiculos', CarController::class);

Route::post('/buscar-automovil', [CarController::class, 'getCar'])->name('search.car');

Route::get('/reparacion/{id}',[RepairController::class, 'create'])->name('reparaciones.create');

Route::post('/agregar-reparacion', [RepairController::class, 'store'])->name('reparaciones.store');

Route::get('/listar-reparaciones', [RepairController::class, 'index'])->name('reparaciones.index');

Route::post('/buscar-reparacion', [RepairController::class, 'getRepair'])->name('search.repair');

Route::get('/listar-reparaciones/{id}', [RepairController::class, 'show'])->name('reparaciones.show');

Route::get('/imprimir-reparaciones/{patente}', [RepairController::class, 'dumpPdf'])->name('reparaciones.pdf');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
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

Route::post('/buscar-cliente', [CustomerController::class, 'getCustomer'])->name('search.customer');

Route::resource('/clientes', CustomerController::class); //metodo destroy no funciona

Route::get('/borrar-cliente/{id}', 'App\Http\Controllers\CustomerController@destroy')->name('delete.customer');

Route::resource('/vehiculos', CarController::class);

Route::post('/buscar-automovil', [CarController::class, 'getCar'])->name('search.car');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ConcesionarioController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModelocolorController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\TipomarcaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\VehiculoController;

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

Route::resource('ciudades', CiudadController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('colores', ColorController::class);
Route::resource('concesionarios', ConcesionarioController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('modelocolors', ModelocolorController::class);
Route::resource('modelos', ModeloController::class);
Route::resource('paises', PaisController::class);
Route::resource('tipomarcas', TipomarcaController::class);
Route::resource('tipos', TipoController::class);
Route::resource('vehiculos', VehiculoController::class);
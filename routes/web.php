<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\DetalleController;

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

Route::resource('usuarios', UsuarioController::class)->names('user.dashboard');
Route::resource('facturas', FacturaController::class)->names('factura.dashboard');
Route::resource('prendas', PrendaController::class)->names('prenda.dashboard');
Route::resource('pagos', PagoController::class)->names('pago.dashboard');
Route::resource('detalles', DetalleController::class)->names('detalle.dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

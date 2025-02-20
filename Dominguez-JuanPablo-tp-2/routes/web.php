<?php

use App\Http\Controllers\clienteController;
use App\Http\Controllers\ventaController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('/buscarCliente', [clienteController::class, 'listarClientes'])->name('listarClientes');
Route::get('/buscarClientePorCuit', [clienteController::class, 'buscarClientePorCuit'])->name('buscarClientePorCuit');

Route::get('/editarCliente/{cliente}', [clienteController::class, 'editarCliente'])->name('editarCliente');
Route::put('/actualizarCliente/{cliente}', [clienteController::class, 'actualizarCliente'])->name('actualizarCliente');




Route::get('/comprobantesEmitidos',[ventaController::class,'listarComprobantes'])->name('listarComprobantes');
Route::get('/buscarComprobante',[ventaController::class,'buscarComprobante'])->name('buscarComprobante');


<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DistribuidoresController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\VehiculoDetallesController;
use App\Http\Controllers\CotizarController;
use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa');
Route::get('/vehiculos', [VehiculoController::class, 'index'])->name('vehiculos');
Route::get('/distribuidores', [DistribuidoresController::class, 'index'])->name('distribuidores');
Route::get('/vehiculos/{id}', [VehiculoDetallesController::class, 'show'])->name('vehiculo_detalles');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'send'])->name('contacto.send');
Route::post('/cotizacion/enviar', [CotizarController::class, 'enviar'])->name('cotizacion.enviar');



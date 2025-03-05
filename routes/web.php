<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\VehiculoDetallesController;
use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa');
Route::get('/vehiculos', [VehiculoController::class, 'index'])->name('vehiculos');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');
Route::get('/vehiculos/{id}', [VehiculoDetallesController::class, 'show'])->name('vehiculo_detalles');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'send'])->name('contacto.send');


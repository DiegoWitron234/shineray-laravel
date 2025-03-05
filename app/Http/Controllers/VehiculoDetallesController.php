<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoDetallesController extends Controller
{
    public function show($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        return view('vehiculo_detalles', compact('vehiculo'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        $vehiculos = Vehiculo::when($query, function($q) use ($query) {
            $q->where('modelo', 'like', "%$query%");
        })->get();

        return view('vehiculos', compact('vehiculos'));
    }
}

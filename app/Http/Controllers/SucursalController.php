<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function index()
    {
        return response()->json(
            Sucursal::all(['nombre','correo','telefono','codigo_postal','direccion','latitud','longitud'])
        );
    }
}

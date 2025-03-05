<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Aquí podrías pasar datos a la vista, por ejemplo: vehículos destacados.
        return view('inicio');
    }
}

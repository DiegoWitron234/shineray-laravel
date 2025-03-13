<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     public function index(Request $request)
    {
        // Obtener los banners
        $banners = Banner::all();

        // Para que se pueda buscar (Probablemente lo quitaré)
        $query = $request->input('q');
        $vehiculos = Vehiculo::when($query, function($q) use ($query) {
            $q->where('modelo', 'like', "%$query%");
        })->get();

        // Retornar la vista 'inicio' con los banners y vehículos
        return view('inicio', compact('banners', 'vehiculos'));
    }
    */
    public function index()
    {
        $banners = Banner::orderBy('orden')->get();
        $vehiculos = Vehiculo::all(); // Tal vez debamos cambiar la lógica
        return view('inicio', compact('banners', 'vehiculos'));
    }
}

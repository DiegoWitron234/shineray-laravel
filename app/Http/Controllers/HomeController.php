<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('orden')->orderBy('id')->get();
        $vehiculos = Vehiculo::all();
        return view('inicio', compact('banners', 'vehiculos'));
    }
}

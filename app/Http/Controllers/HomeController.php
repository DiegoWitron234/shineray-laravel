<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Header;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('orden')->orderBy('id')->get();
        $vehiculos = Vehiculo::all();
        $headers = Header::orderBy('orden')->orderBy('id')->get();
        return view('inicio', compact('banners', 'vehiculos', 'headers'));
    }
}

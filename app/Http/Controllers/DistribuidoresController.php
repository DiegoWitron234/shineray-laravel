<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistribuidoresController extends Controller
{
    public function index()
    {
        return view('distribuidores');
    }
}

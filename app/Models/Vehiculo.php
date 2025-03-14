<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'modelo', 'precio', 'descripcion', 'imagen', 'descripcion', 'carga', 'motor', 'rendimiento'];
}

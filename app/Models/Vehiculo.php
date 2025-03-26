<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'modelo',
        'precio',
        'descripcion',
        'imagen',    // Imagen para la página "Inicio"
        'catalogo',  // Nueva imagen para la página "Vehículos"
        'detalles',  // Imagen con los datos del vehiculo
        'carga',
        'motor',
        'rendimiento'
    ];
}

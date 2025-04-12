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
        'imagen',          // Imagen principal
        'catalogo',        // Imagen para catálogo
        'detalles',        // Imagen con datos (detalles)
        'detalles_imagenes', // Array de imágenes de detalles
        'carga',
        'motor',
        'rendimiento'
    ];

    protected $casts = [
        'detalles_imagenes' => 'array', // Se convierte automáticamente a array
    ];
}

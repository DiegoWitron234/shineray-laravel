<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'codigo_postal',
        'direccion',
        'latitud',
        'longitud',
    ];

    protected $casts = [
        'latitud'  => 'float',
        'longitud' => 'float',
    ];
}

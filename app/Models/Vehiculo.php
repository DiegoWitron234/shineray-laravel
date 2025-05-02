<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $tipo
 * @property string $modelo
 * @property string|null $precio
 * @property string|null $descripcion
 * @property string|null $imagen
 * @property string|null $catalogo
 * @property string|null $detalles
 * @property array<array-key, mixed>|null $detalles_imagenes
 * @property string|null $carga
 * @property string|null $motor
 * @property string|null $rendimiento
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereCarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereCatalogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereDetalles($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereDetallesImagenes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereModelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereMotor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereRendimiento($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehiculo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

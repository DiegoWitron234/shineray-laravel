<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Header
 *
 * @property int $id
 * @property string|null $titulo
 * @property string $imagen
 * @property string|null $link
 * @property int $orden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Header newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Header newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Header query()
 * @method static \Illuminate\Database\Eloquent\Builder|Header orderBy(string $column, string $direction = 'asc')
 * @mixin \Eloquent
 */

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'imagen',
        'link',
        'orden',
    ];
}

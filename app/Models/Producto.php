<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'ruta_imagen',
        'cantidad_total',
        'precio',
        'estado',
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($producto) {
            $producto->{$producto->getKeyName()} = Uuid::uuid4()->toString();
        });
    }
}

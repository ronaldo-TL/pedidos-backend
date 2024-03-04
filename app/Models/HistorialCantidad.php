<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Uuid;

class HistorialCantidad extends Model
{
    use HasFactory;
    protected $table = 'historial_cantidades';
    protected $fillable = [
        'id_producto',
        'tipo',
        'descripcion',
        'cantidad',
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($historial) {
            $historial->{$historial->getKeyName()} = Uuid::uuid4()->toString();
        });
    }

    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Uuid;

class DetallePedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pedido',
        'id_producto',
        'precio',
        'cantidad',
        'monto',
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($detallePedido) {
            $detallePedido->{$detallePedido->getKeyName()} = Uuid::uuid4()->toString();
        });
    }

    public function pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }

    // Pued agregar la relación con el producto
}

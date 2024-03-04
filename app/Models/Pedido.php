<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'id_usuario_solicitante',
        'fecha_solicitud',
        'monto_total',
        'fecha_entrega',
        'id_usuario_entrega',
    ];

    protected $keyType = 'string';
    public $incrementing = false; 

  
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pedido) {
            $pedido->{$pedido->getKeyName()} = Uuid::uuid4()->toString();
        });
    }
}

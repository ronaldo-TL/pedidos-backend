<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Uuid;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario',
        'contraseña',
        'numero_documento',
        'fecha_nacimiento',
        'nombres',
        'primer_apellido',
        'segundo_apellido',
        'correo_electronico',
        'celular',
        'estado',
        'id_rol',
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($usuario) {
            $usuario->{$usuario->getKeyName()} = Uuid::uuid4()->toString();
        });
    }

    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }
}
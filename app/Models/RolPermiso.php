<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class RolPermiso extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_rol',
        'id_permiso',
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($rolPermiso) {
            $rolPermiso->{$rolPermiso->getKeyName()} = Uuid::uuid4()->toString();
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Menu extends Model
{
    protected $fillable = [
        'nombre', 
        'ruta', 
        'icono', 
        'orden', 
        'estado'
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($menu) {
            $menu->id = Uuid::uuid4()->toString();
        });
    }
}

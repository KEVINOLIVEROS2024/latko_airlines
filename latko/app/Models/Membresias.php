<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Membresias extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'puntos_requeridos'];

    public function clientes(): HasMany
    {
        return $this->hasMany(Clientes::class);
    }
}

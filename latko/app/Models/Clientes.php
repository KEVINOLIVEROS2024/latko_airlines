<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'correo', 'telefono'];

    public function reservas(): HasMany
    {
        return $this->hasMany(Reservas::class);
    }
}

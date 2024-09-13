<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'vuelo_id', 'asientos_reservados', 'estado'];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Clientes::class);
    }

    public function vuelo(): BelongsTo
    {
        return $this->belongsTo(Vuelos::class);
    }

    public function pagos(): HasMany
    {
        return $this->hasMany(Pagos::class);
    }

    public function equipajes(): HasMany
    {
        return $this->hasMany(Equipajes::class);
    }
}

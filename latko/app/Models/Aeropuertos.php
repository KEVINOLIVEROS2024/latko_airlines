<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aeropuertos extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'nombre', 'ciudad', 'pais'];

    public function salidaRutas(): HasMany
    {
        return $this->hasMany(Rutas::class, 'salida_aeropuerto_id');
    }

    public function llegadaRutas(): HasMany
    {
        return $this->hasMany(Rutas::class, 'llegada_aeropuerto_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rutas extends Model
{
    use HasFactory;

    protected $fillable = ['salida_aeropuerto_id','llegada_aeropuerto_id','distancia'];

    // Relación con Aeropuerto de salida
    public function salidaAeropuerto()
    {
        return $this->belongsTo(Aeropuertos::class, 'salida_aeropuerto_id');
    }

    // Relación con Aeropuerto de llegada
    public function llegadaAeropuerto()
    {
        return $this->belongsTo(Aeropuertos::class, 'llegada_aeropuerto_id');
    }
}

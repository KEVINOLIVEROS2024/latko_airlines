<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    use HasFactory;

    protected $fillable = ['salida_aeropuerto_id','llegada_aeropuerto_id','distancia'];

    // Relación con Aeropuerto de salida
    public function salidaAeropuerto()
    {
        return $this->belongsTo(Aeropuertos::class);
    }

    // Relación con Aeropuerto de llegada
    public function llegadaAeropuerto()
    {
        return $this->belongsTo(Aeropuertos::class);
    }

    // Relación con Vuelos (si lo tienes)
    public function vuelos()
    {
        return $this->hasMany(Vuelos::class);
    }
}

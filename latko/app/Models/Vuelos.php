<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    use HasFactory;

    protected $fillable = ['ruta_id', 'avion_id', 'hora_salida', 'hora_llegada'];

    public function Ruta(): BelongsTo
    {
        return $this->belongsTo(Rutas::class );
    }

    public function Avion(): BelongsTo
    {
        return $this->belongsTo(Aviones::class);
    }}

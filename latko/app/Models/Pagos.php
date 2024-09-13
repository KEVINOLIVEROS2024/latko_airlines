<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pagos extends Model
{
    use HasFactory;

    protected $fillable = ['reserva_id', 'monto', 'metodo_pago'];

    public function reserva(): BelongsTo
    {
        return $this->belongsTo(Reservas::class);
    }
}

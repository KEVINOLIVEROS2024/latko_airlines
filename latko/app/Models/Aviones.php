<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviones extends Model
{
    use HasFactory;

    protected $fillable = ['numero_de_registro','modelo','capacidad'];


}

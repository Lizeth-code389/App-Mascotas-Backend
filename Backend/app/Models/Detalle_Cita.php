<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Cita extends Model
{
    use HasFactory;

    protected $fillable=['cuidado_administrar_medicamento','recomendacion_veterinario','proximo_control']; 
}

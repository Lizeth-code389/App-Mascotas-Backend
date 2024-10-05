<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitasMedica extends Model
{
    use HasFactory;

    protected $table='citas';
    protected $fillable=['nombre_de_la_cita','fecha','hora','id_mascotas','id_veterinarios']; 
}

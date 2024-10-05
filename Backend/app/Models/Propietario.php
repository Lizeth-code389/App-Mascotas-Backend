<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    protected $fillable=['nombres','apellidos','telefono','direccion','correo_electronico','torre','apartamento','id_barrios', 'id_mascotas']; 
}

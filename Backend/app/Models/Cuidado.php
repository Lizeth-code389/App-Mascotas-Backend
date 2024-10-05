<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidado extends Model
{
    use HasFactory;

    protected $fillable=['baño','paseo','juegos','baño_corte_de_uñas','id_mascotas']; 
}

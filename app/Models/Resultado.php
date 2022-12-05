<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre', 'jugador1', 'jugador2', 'ganador', 'puntos', 'estado'];

    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treinador extends Model
{
    protected $fillable = [
        'clube',
        'nome',
        'pais_origem'
    ];

}

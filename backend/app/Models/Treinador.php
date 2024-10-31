<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treinador extends Model
{
    protected $table = 'treinadores';

    protected $fillable = [
        'clube',
        'nome',
        'pais_origem'
    ];

}

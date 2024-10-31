<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $table = 'jogadores';

    protected $fillable = [
        'nome',
        'numero',
        'posicao',
        'clube',
        'nacionalidade'
    ];

}

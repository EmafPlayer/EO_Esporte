<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{

    protected $fillable = [
        'rodada',
        'data_partida',
        'hora_partida',
        'local',
        'clube_casa',
        'clube_fora',
        'gols_clube_casa',
        'gols_clube_fora' 
    ];

}

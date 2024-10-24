<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tabela extends Model
{
    protected $fillable = [
        'pontos',
        'clube',
        'jogos',
        'vitorias',
        'empates',
        'derrotas',
        'gols_pros',
        'gols_contras',
        'saldo_gols'
    ];
}

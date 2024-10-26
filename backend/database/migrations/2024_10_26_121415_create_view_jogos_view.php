<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE OR REPLACE VIEW jogos_view AS
            SELECT jogos.rodada, jogos.`status`, jogos.data_partida, jogos.hora_partida, 
                   jogos.`local`, jogos.gols_clube_casa, jogos.gols_clube_fora,
                   casa.nome AS nome_clube_casa, casa.sigla AS sigla_clube_casa, casa.escudo AS escudo_clube_casa,
                   fora.nome AS nome_clube_fora, fora.sigla AS sigla_clube_fora, fora.escudo AS escudo_clube_fora
            FROM jogos
            JOIN clubes AS casa 
            ON jogos.clube_casa = casa.id
            JOIN clubes AS fora 
            ON jogos.clube_fora = fora.id
            ORDER BY jogos.rodada ASC;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_jogos_view');
    }
};

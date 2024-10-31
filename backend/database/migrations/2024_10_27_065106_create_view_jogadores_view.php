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
            CREATE OR REPLACE VIEW jogadores_view AS
            SELECT jogadores.clube AS id_clube,jogadores.nome AS nome_jogador, jogadores.posicao AS id_posicao,
                   numero, clubes.nome AS nome_clube, jogadores.nacionalidade, clubes.sigla AS sigla_clube, 
                   posicoes.descricao AS posicao, posicoes.sigla AS sigla_posicao, clubes.escudo
            FROM jogadores
            JOIN clubes
            ON jogadores.clube = clubes.id
            JOIN posicoes
            ON posicoes.id = jogadores.posicao
            ORDER BY jogadores.clube DESC
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_jogadores_view');
    }
};

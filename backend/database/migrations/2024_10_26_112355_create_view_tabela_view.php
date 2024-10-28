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
            CREATE OR REPLACE VIEW tabela_view AS
            SELECT tabelas.pontos, tabelas.jogos, tabelas.vitorias, tabelas.empates, tabelas.id,
                   tabelas.derrotas, tabelas.gols_pros, tabelas.gols_contras, tabelas.saldo_gols,
                   clubes.nome, clubes.sigla, clubes.escudo
            FROM tabelas
            JOIN clubes
            ON tabelas.clube = clubes.id
            ORDER BY pontos DESC, saldo_gols DESC, gols_pros DESC;
        ');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_tabela_view');
    }
};

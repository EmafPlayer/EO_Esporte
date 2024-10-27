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
            CREATE OR REPLACE VIEW treinadores_view AS
            SELECT treinadores.nome AS nome_treinador, pais_origem, clubes.nome AS nome_clube,
                   clubes.sigla AS sigla_clube, escudo
            FROM treinadores
            JOIN clubes
            ON treinadores.clube = clubes.id
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_treinadores_view');
    }
};

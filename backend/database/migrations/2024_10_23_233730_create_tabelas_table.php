<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabelas', function (Blueprint $table) {
            $table->id(); //pk e fk
            $table->foreignId('clube');
            $table->integer('pontos');
            $table->integer('jogos');
            $table->integer('vitorias');
            $table->integer('empates');
            $table->integer('derrotas');
            $table->integer('gols_pros');
            $table->integer('gols_contras');
            $table->integer('saldo_gols');
            $table->timestamps();

            $table->foreign('clube')->references('id')->on('clubes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabelas');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rodada'); //fk
            $table->boolean('status');
            $table->date('data_partida');
            $table->time('hora_partida');
            $table->string('local', 100);
            $table->foreignId('clube_casa'); //fk
            $table->foreignId('clube_fora'); //fk
            $table->integer('gols_clube_casa')->nullable();
            $table->integer('gols_clube_fora')->nullable();
            $table->timestamps();

            $table->foreign('rodada')->references('id')->on('rodadas');
            $table->foreign('clube_casa')->references('id')->on('clubes');
            $table->foreign('clube_fora')->references('id')->on('clubes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogos');
    }
};

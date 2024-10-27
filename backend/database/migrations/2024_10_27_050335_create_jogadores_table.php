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
        Schema::create('jogadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->integer('numero');
            $table->foreignId('posicao');
            $table->foreignId('clube');
            $table->string('nacionalidade');
            $table->timestamps();

            $table->foreign('posicao')->references('id')->on('posicoes');
            $table->foreign('clube')->references('id')->on('clubes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogadores');
    }
};

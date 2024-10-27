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
        Schema::create('treinadores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clube');
            $table->string('nome', 50);
            $table->string('pais_origem', 20);
            $table->timestamps();

            $table->foreign('clube')->references('id')->on('clubes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treinadores');
    }
};

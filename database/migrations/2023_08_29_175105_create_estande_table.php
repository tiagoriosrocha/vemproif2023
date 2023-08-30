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
        Schema::create('estandes', function (Blueprint $table) {
            $table->id();
            $table->string('hashtag')->nullable();
            $table->string('titulo');
            $table->string('descricao')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('texto')->nullable();
            $table->string('imagem')->default('default.avif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estande');
    }
};

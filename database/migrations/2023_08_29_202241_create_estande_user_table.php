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
        Schema::create('estande_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('estande_id');
            $table->timestamps();
            $table->unique(['user_id', 'estande_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('estande_id')->references('id')->on('estandes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estande_user');
    }
};

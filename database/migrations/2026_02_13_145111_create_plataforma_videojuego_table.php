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
        Schema::create('plataforma_videojuego', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('videojuego_id');
            $table->unsignedBigInteger('plataforma_id');
            $table->timestamps();

            $table->foreign('videojuego_id')->references('id')->on('videojuegos')->onDelete('cascade');
            $table->foreign('plataforma_id')->references('id')->on('plataformas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plataforma_videojuego');
    }
};

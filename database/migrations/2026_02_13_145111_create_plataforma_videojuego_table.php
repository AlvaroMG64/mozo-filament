<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plataforma_videojuego', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plataforma_id')->constrained('plataformas')->onDelete('cascade');
            $table->foreignId('videojuego_id')->constrained('videojuegos')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plataforma_videojuego');
    }
};
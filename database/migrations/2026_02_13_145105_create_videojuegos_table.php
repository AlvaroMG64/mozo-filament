<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2);
            $table->integer('stock');
            $table->year('anio_lanzamiento');

            // Relación con User (1:N)
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');

            // Relación con Genero (1:N)
            $table->foreignId('genero_id')
                  ->constrained('generos')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('videojuegos');
    }
};
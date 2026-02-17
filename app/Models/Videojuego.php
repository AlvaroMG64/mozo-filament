<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Videojuego extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'precio',
        'stock',
        'anio_lanzamiento',
        'genero_id',
        'user_id',
    ];

    // Relación 1:N con Genero
    public function genero(): BelongsTo
    {
        return $this->belongsTo(Genero::class);
    }

    // Relación 1:N con User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relación N:M con Plataforma
    public function plataformas(): BelongsToMany
    {
        return $this->belongsToMany(Plataforma::class);
    }
}
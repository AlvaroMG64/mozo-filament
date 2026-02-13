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
        'genero_id',
        'anio_lanzamiento',
    ];

    /**
     * Videojuego pertenece a un género
     */
    public function genero(): BelongsTo
    {
        return $this->belongsTo(Genero::class);
    }

    /**
     * Videojuego puede estar en muchas plataformas
     */
    public function plataformas(): BelongsToMany
    {
        return $this->belongsToMany(Plataforma::class);
    }
}
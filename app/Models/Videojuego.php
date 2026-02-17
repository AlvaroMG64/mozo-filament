<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'genero_id'
    ];

    public function genero(): BelongsTo
    {
        return $this->belongsTo(Genero::class);
    }

    public function plataformas(): BelongsToMany
    {
        return $this->belongsToMany(Plataforma::class);
    }
}
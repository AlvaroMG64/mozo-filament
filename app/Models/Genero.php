<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    /**
     * Relación 1:n: un género tiene muchos videojuegos
     *
     * @return HasMany<int, Videojuego>
     */
    public function videojuegos(): HasMany
    {
        return $this->hasMany(Videojuego::class);
    }
}
<?php

namespace App\Filament\Resources\Videojuegos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VideojuegoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titulo')
                    ->required(),
                Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('precio')
                    ->required()
                    ->numeric(),
                TextInput::make('stock')
                    ->required()
                    ->numeric(),
                TextInput::make('anio_lanzamiento')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Select::make('genero_id')
                    ->relationship('genero', 'id')
                    ->required(),
            ]);
    }
}

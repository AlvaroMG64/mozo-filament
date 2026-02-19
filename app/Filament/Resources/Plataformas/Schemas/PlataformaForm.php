<?php

namespace App\Filament\Resources\Plataformas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PlataformaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('anio_lanzamiento')
                    ->required(),
            ]);
    }
}

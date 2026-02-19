<?php

namespace App\Filament\Resources\Generos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GeneroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
            ]);
    }
}

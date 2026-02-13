<?php

namespace App\Filament\Resources\Videojuegos;

use App\Filament\Resources\Videojuegos\Pages\CreateVideojuego;
use App\Filament\Resources\Videojuegos\Pages\EditVideojuego;
use App\Filament\Resources\Videojuegos\Pages\ListVideojuegos;
use App\Filament\Resources\Videojuegos\Schemas\VideojuegoForm;
use App\Filament\Resources\Videojuegos\Tables\VideojuegosTable;
use App\Models\Videojuego;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VideojuegoResource extends Resource
{
    protected static ?string $model = Videojuego::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'titulo';

    public static function form(Schema $schema): Schema
    {
        return VideojuegoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VideojuegosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVideojuegos::route('/'),
            'create' => CreateVideojuego::route('/create'),
            'edit' => EditVideojuego::route('/{record}/edit'),
        ];
    }
}

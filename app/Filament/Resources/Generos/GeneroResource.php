<?php

namespace App\Filament\Resources\Generos;

use App\Filament\Resources\Generos\Pages\CreateGenero;
use App\Filament\Resources\Generos\Pages\EditGenero;
use App\Filament\Resources\Generos\Pages\ListGeneros;
use App\Filament\Resources\Generos\Schemas\GeneroForm;
use App\Filament\Resources\Generos\Tables\GenerosTable;
use App\Models\Genero;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GeneroResource extends Resource
{
    protected static ?string $model = Genero::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return GeneroForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GenerosTable::configure($table);
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
            'index' => ListGeneros::route('/'),
            'create' => CreateGenero::route('/create'),
            'edit' => EditGenero::route('/{record}/edit'),
        ];
    }
}

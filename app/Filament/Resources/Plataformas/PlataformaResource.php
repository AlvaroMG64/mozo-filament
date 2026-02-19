<?php

namespace App\Filament\Resources\Plataformas;

use App\Filament\Resources\Plataformas\Pages\CreatePlataforma;
use App\Filament\Resources\Plataformas\Pages\EditPlataforma;
use App\Filament\Resources\Plataformas\Pages\ListPlataformas;
use App\Filament\Resources\Plataformas\Schemas\PlataformaForm;
use App\Filament\Resources\Plataformas\Tables\PlataformasTable;
use App\Models\Plataforma;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlataformaResource extends Resource
{
    protected static ?string $model = Plataforma::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return PlataformaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlataformasTable::configure($table);
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
            'index' => ListPlataformas::route('/'),
            'create' => CreatePlataforma::route('/create'),
            'edit' => EditPlataforma::route('/{record}/edit'),
        ];
    }
}

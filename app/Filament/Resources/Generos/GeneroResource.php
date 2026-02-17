<?php

namespace App\Filament\Resources;

use App\Models\Genero;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;

use App\Filament\Resources\GeneroResource\Pages\ListGeneros;
use App\Filament\Resources\GeneroResource\Pages\CreateGenero;
use App\Filament\Resources\GeneroResource\Pages\EditGenero;

class GeneroResource extends Resource
{
    protected static ?string $model = Genero::class;


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),

                Tables\Columns\TextColumn::make('nombre')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                
            ]);
    }

}
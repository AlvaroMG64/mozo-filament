<?php

namespace App\Filament\Resources\Videojuegos\Pages;

use App\Filament\Resources\Videojuegos\VideojuegoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVideojuegos extends ListRecords
{
    protected static string $resource = VideojuegoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

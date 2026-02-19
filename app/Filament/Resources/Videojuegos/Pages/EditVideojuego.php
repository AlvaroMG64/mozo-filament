<?php

namespace App\Filament\Resources\Videojuegos\Pages;

use App\Filament\Resources\Videojuegos\VideojuegoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVideojuego extends EditRecord
{
    protected static string $resource = VideojuegoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

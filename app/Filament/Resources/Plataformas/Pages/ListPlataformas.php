<?php

namespace App\Filament\Resources\Plataformas\Pages;

use App\Filament\Resources\Plataformas\PlataformaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlataformas extends ListRecords
{
    protected static string $resource = PlataformaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

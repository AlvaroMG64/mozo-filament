<?php

namespace App\Filament\Resources\Generos\Pages;

use App\Filament\Resources\Generos\GeneroResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGenero extends EditRecord
{
    protected static string $resource = GeneroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

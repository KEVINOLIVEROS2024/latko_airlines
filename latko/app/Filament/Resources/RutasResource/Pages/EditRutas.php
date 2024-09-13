<?php

namespace App\Filament\Resources\RutasResource\Pages;

use App\Filament\Resources\RutasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRutas extends EditRecord
{
    protected static string $resource = RutasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

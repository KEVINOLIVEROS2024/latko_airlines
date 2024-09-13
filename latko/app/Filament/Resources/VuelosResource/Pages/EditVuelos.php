<?php

namespace App\Filament\Resources\VuelosResource\Pages;

use App\Filament\Resources\VuelosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVuelos extends EditRecord
{
    protected static string $resource = VuelosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

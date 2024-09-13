<?php

namespace App\Filament\Resources\AeropuertosResource\Pages;

use App\Filament\Resources\AeropuertosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAeropuertos extends EditRecord
{
    protected static string $resource = AeropuertosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

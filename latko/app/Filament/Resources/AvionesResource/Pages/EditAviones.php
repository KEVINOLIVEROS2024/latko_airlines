<?php

namespace App\Filament\Resources\AvionesResource\Pages;

use App\Filament\Resources\AvionesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAviones extends EditRecord
{
    protected static string $resource = AvionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

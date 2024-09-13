<?php

namespace App\Filament\Resources\EquipajeResource\Pages;

use App\Filament\Resources\EquipajeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEquipaje extends EditRecord
{
    protected static string $resource = EquipajeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

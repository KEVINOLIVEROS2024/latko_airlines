<?php

namespace App\Filament\Resources\EquipajeResource\Pages;

use App\Filament\Resources\EquipajeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEquipajes extends ListRecords
{
    protected static string $resource = EquipajeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

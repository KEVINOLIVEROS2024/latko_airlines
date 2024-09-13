<?php

namespace App\Filament\Resources\AeropuertosResource\Pages;

use App\Filament\Resources\AeropuertosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAeropuertos extends ListRecords
{
    protected static string $resource = AeropuertosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

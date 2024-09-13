<?php

namespace App\Filament\Resources\MembresiasResource\Pages;

use App\Filament\Resources\MembresiasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMembresias extends ListRecords
{
    protected static string $resource = MembresiasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

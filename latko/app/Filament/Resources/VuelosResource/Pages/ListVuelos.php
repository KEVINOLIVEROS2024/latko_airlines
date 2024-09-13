<?php

namespace App\Filament\Resources\VuelosResource\Pages;

use App\Filament\Resources\VuelosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVuelos extends ListRecords
{
    protected static string $resource = VuelosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

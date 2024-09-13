<?php

namespace App\Filament\Resources\AvionesResource\Pages;

use App\Filament\Resources\AvionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAviones extends ListRecords
{
    protected static string $resource = AvionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

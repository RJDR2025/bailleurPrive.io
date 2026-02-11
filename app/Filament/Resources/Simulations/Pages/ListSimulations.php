<?php

namespace App\Filament\Resources\Simulations\Pages;

use App\Filament\Resources\Simulations\SimulationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSimulations extends ListRecords
{
    protected static string $resource = SimulationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

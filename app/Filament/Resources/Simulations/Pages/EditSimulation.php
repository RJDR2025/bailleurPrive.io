<?php

namespace App\Filament\Resources\Simulations\Pages;

use App\Filament\Resources\Simulations\SimulationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSimulation extends EditRecord
{
    protected static string $resource = SimulationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

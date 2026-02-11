<?php

namespace App\Filament\Resources\Simulations;

use App\Filament\Resources\Simulations\Pages\CreateSimulation;
use App\Filament\Resources\Simulations\Pages\EditSimulation;
use App\Filament\Resources\Simulations\Pages\ListSimulations;
use App\Filament\Resources\Simulations\Schemas\SimulationForm;
use App\Filament\Resources\Simulations\Tables\SimulationsTable;
use App\Models\Simulation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SimulationResource extends Resource
{
    protected static ?string $model = Simulation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalculator;

    protected static ?string $navigationLabel = 'Simulations';

    protected static ?string $modelLabel = 'Simulation';

    protected static ?string $pluralModelLabel = 'Simulations';

    public static function form(Schema $schema): Schema
    {
        return SimulationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SimulationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSimulations::route('/'),
            'create' => CreateSimulation::route('/create'),
            'edit' => EditSimulation::route('/{record}/edit'),
        ];
    }
}

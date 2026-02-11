<?php

namespace App\Filament\Resources\Simulations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SimulationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('prenom')
                    ->required(),
                TextInput::make('nom')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('telephone')
                    ->tel(),
                Toggle::make('accepte_contact')
                    ->required(),
                TextInput::make('prix_bien')
                    ->required()
                    ->numeric(),
                TextInput::make('type_bien')
                    ->required(),
                TextInput::make('surface')
                    ->required()
                    ->numeric(),
                TextInput::make('niveau_loyer')
                    ->required(),
                TextInput::make('tmi')
                    ->required()
                    ->numeric(),
                TextInput::make('base_amortissable')
                    ->required()
                    ->numeric(),
                TextInput::make('taux_amortissement')
                    ->required()
                    ->numeric(),
                TextInput::make('amortissement_brut')
                    ->required()
                    ->numeric(),
                TextInput::make('plafond')
                    ->required()
                    ->numeric(),
                Toggle::make('est_plafonne')
                    ->required(),
                TextInput::make('amortissement_annuel')
                    ->required()
                    ->numeric(),
                TextInput::make('economie_annuelle')
                    ->required()
                    ->numeric(),
                TextInput::make('economie_totale')
                    ->required()
                    ->numeric(),
                TextInput::make('ip_address'),
                TextInput::make('user_agent'),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Simulations\Tables;

use App\Models\Simulation;
use Filament\Actions\Action;
use Spatie\Browsershot\Browsershot;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SimulationsTable
{
    public static function preparePdfData(Simulation $record): array
    {
        return [
            'prenom' => $record->prenom,
            'nom' => $record->nom,
            'email' => $record->email,
            'prixBien' => $record->prix_bien,
            'typeBien' => $record->type_bien,
            'surface' => $record->surface,
            'niveauLoyer' => $record->niveau_loyer,
            'tmi' => $record->tmi,
            'resultats' => [
                'baseAmortissable' => $record->base_amortissable,
                'taux' => $record->taux_amortissement * 100,
                'amortissementBrut' => $record->amortissement_brut,
                'plafond' => $record->plafond,
                'amortissementAnnuel' => $record->amortissement_annuel,
                'economieAnnuelle' => $record->economie_annuelle,
                'economieTotale' => $record->economie_totale,
                'estPlafonne' => $record->est_plafonne,
            ],
            'date' => $record->created_at->format('d/m/Y'),
        ];
    }

    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom_complet')
                    ->label('Nom')
                    ->state(fn ($record) => $record->prenom . ' ' . $record->nom)
                    ->searchable(['prenom', 'nom'])
                    ->sortable(['nom']),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable(),
                TextColumn::make('prix_bien')
                    ->label('Prix du bien')
                    ->money('EUR')
                    ->sortable(),
                TextColumn::make('type_bien')
                    ->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'neuf' => 'success',
                        'renove' => 'warning',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'neuf' => 'Neuf',
                        'renove' => 'Rénové',
                    }),
                TextColumn::make('niveau_loyer')
                    ->label('Niveau loyer')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'intermediaire' => 'gray',
                        'social' => 'info',
                        'tres_social' => 'success',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'intermediaire' => 'Intermédiaire',
                        'social' => 'Social',
                        'tres_social' => 'Très social',
                    }),
                TextColumn::make('tmi')
                    ->label('TMI')
                    ->suffix('%')
                    ->sortable(),
                TextColumn::make('economie_annuelle')
                    ->label('Eco. annuelle')
                    ->money('EUR')
                    ->sortable()
                    ->color('success'),
                TextColumn::make('economie_totale')
                    ->label('Eco. 9 ans')
                    ->money('EUR')
                    ->sortable()
                    ->weight('bold')
                    ->color('success'),
                IconColumn::make('accepte_contact')
                    ->label('Contact')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Date')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('type_bien')
                    ->label('Type de bien')
                    ->options([
                        'neuf' => 'Neuf',
                        'renove' => 'Rénové',
                    ]),
                SelectFilter::make('niveau_loyer')
                    ->label('Niveau de loyer')
                    ->options([
                        'intermediaire' => 'Intermédiaire',
                        'social' => 'Social',
                        'tres_social' => 'Très social',
                    ]),
                SelectFilter::make('tmi')
                    ->label('TMI')
                    ->options([
                        '0' => '0%',
                        '11' => '11%',
                        '30' => '30%',
                        '41' => '41%',
                        '45' => '45%',
                    ]),
            ])
            ->recordActions([
                Action::make('telecharger_pdf')
                    ->label('PDF')
                    ->icon(Heroicon::OutlinedArrowDownTray)
                    ->color('gray')
                    ->action(function (Simulation $record) {
                        $data = self::preparePdfData($record);
                        $html = view('pdf.simulation', $data)->render();
                        $filename = 'simulation-' . $record->id . '-' . now()->format('Y-m-d') . '.pdf';
                        $tempPath = storage_path('app/temp/' . $filename);

                        // Créer le dossier temp s'il n'existe pas
                        if (!is_dir(storage_path('app/temp'))) {
                            mkdir(storage_path('app/temp'), 0755, true);
                        }

                        // Générer le PDF avec Browsershot
                        $browsershot = Browsershot::html($html)
                            ->setNodeModulePath(base_path('node_modules'))
                            ->format('A4')
                            ->margins(10, 10, 15, 10)
                            ->showBackground()
                            ->timeout(60)
                            ->noSandbox();

                        if ($nodePath = config('browsershot.node_path')) {
                            $browsershot->setNodeBinary($nodePath);
                        }

                        if ($chromePath = config('browsershot.executable_path')) {
                            $browsershot->setChromePath($chromePath);
                        }

                        $browsershot->save($tempPath);

                        return response()->download($tempPath, $filename)->deleteFileAfterSend(true);
                    }),
                Action::make('voir_pdf')
                    ->label('Voir')
                    ->icon(Heroicon::OutlinedEye)
                    ->color('info')
                    ->url(fn (Simulation $record): string => route('admin.simulation.pdf', $record))
                    ->openUrlInNewTab(),
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Filament\Resources\Simulations\Tables\SimulationsTable;
use App\Models\Simulation;
use Spatie\Browsershot\Browsershot;

class PdfController extends Controller
{
    public function simulation(Simulation $simulation)
    {
        $data = SimulationsTable::preparePdfData($simulation);
        $html = view('pdf.simulation', $data)->render();
        $filename = 'simulation-' . $simulation->id . '.pdf';
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

        // Afficher le PDF dans le navigateur
        return response()->file($tempPath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
        ])->deleteFileAfterSend(true);
    }
}

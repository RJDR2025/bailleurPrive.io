<?php

use App\Filament\Resources\Simulations\Tables\SimulationsTable;
use App\Models\Simulation;
use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', function () {
    return view('counter');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/comprendre', function () {
    return view('comprendre');
});

Route::get('/comparatif', function () {
    return view('comparatif');
});

Route::get('/simulateur', function () {
    return view('simulateur');
});

Route::get('/calendrier', function () {
    return view('calendrier');
});

Route::get('/amortissement', function () {
    return view('amortissement');
});

Route::get('/micro-foncier', function () {
    return view('micro-foncier');
});

Route::get('/deficit-foncier', function () {
    return view('deficit-foncier');
});

Route::get('/eligibilite', function () {
    return view('eligibilite');
});

Route::get('/faq', function () {
    return view('faq');
});

// Route pour visualiser le PDF d'une simulation (admin seulement)
Route::get('/admin/simulation/{simulation}/pdf', function (Simulation $simulation) {
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
})->middleware(['auth'])->name('admin.simulation.pdf');

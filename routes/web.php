<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

// Pages statiques
Route::get('/', [PageController::class, 'home']);
Route::get('/comprendre', [PageController::class, 'comprendre']);
Route::get('/comparatif', [PageController::class, 'comparatif']);
Route::get('/calendrier', [PageController::class, 'calendrier']);
Route::get('/amortissement', [PageController::class, 'amortissement']);
Route::get('/micro-foncier', [PageController::class, 'microFoncier']);
Route::get('/deficit-foncier', [PageController::class, 'deficitFoncier']);
Route::get('/eligibilite', [PageController::class, 'eligibilite']);
Route::get('/faq', [PageController::class, 'faq']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/simulateur', [PageController::class, 'simulateur']);

// PDF (admin seulement)
Route::get('/admin/simulation/{simulation}/pdf', [PdfController::class, 'simulation'])
    ->middleware(['auth'])
    ->name('admin.simulation.pdf');

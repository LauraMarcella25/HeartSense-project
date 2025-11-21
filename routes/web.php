<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PredictionController;

Route::view('/', 'home')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/predict', [PredictionController::class, 'showForm'])->name('predict.form');
    Route::post('/predict', [PredictionController::class, 'predict'])->name('predict.process');
});

require __DIR__.'/auth.php';

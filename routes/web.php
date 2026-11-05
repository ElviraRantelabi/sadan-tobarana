<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ExperimentController;

/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/

Route::get('/', [ExperimentController::class, 'show'])
    ->name('home');

/*
|--------------------------------------------------------------------------
| Instruksi Eksperimen
|--------------------------------------------------------------------------
*/

Route::get('/experiment/instructions', [ExperimentController::class, 'instructions'])
    ->name('experiment.instructions');

/*
|--------------------------------------------------------------------------
| Masuk ke Treatment yang Sudah Dialokasikan
|--------------------------------------------------------------------------
*/

Route::post('/experiment/assign', [ExperimentController::class, 'assign'])
    ->name('experiment.assign');

/*
|--------------------------------------------------------------------------
| Status Kuota Treatment
|--------------------------------------------------------------------------
*/

Route::get('/experiment/allocation-status', [ExperimentController::class, 'allocationStatus'])
    ->name('experiment.allocation-status');

/*
|--------------------------------------------------------------------------
| Preview Treatment untuk Development
|--------------------------------------------------------------------------
*/

Route::get('/preview/{treatment}', function ($treatment) {

    abort_unless(app()->environment('local'), 404);

    $treatment = strtoupper($treatment);

    abort_unless(
        in_array($treatment, ['A1', 'A2', 'B1', 'B2'], true),
        404
    );

    $view = 'treatment.' . $treatment;

    abort_unless(View::exists($view), 404);

    return view($view);

})->name('treatment.preview');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\AsignacioneController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//PAra provar la vista de los usuario
Route::controller(EstudianteController::class)->group(function()
{
    Route::get('estudiante','index')->name('estudiante.index');
    Route::get('estudiante/create','create')->name('estudiante.create');
    Route::post('estudiante','store')->name('estudiante.store');
});

Route::controller(AsignacioneController::class)->group(function()
{
    Route::get('asignacione','index')->name('asignacione.index');
    Route::get('asignacione/create','create')->name('asignacione.create');
    Route::post('asignacione','store')->name('asignacione.store');
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('primeira', [GeneralController::class, 'primeira']);
Route::get('segunda', [GeneralController::class, 'segunda']);
Route::get('terceira', [GeneralController::class, 'terceira']);
Route::get('quarta', [GeneralController::class, 'quarta']);
Route::get('quinta', [GeneralController::class, 'quinta']);


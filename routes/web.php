<?php

use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/warga', [WargaController::class, 'index']);
Route::get('/warga/create', [WargaController::class, 'create']);
Route::post('/warga/store', [WargaController::class, 'store']);
Route::get('/warga/{id}/edit', [WargaController::class, 'edit']);
Route::put('/warga/{id}', [WargaController::class, 'update']);
Route::delete('/warga/{id}', [WargaController::class, 'destroy']);
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::get('/contact/create', [ContactController::class, 'create']);
Route::post('/contact/store', [ContactController::class, 'store']);

Route::get('/contact/edit/{id}', [ContactController::class, 'edit']);
Route::patch('/contact/update/{id}', [ContactController::class, 'update']);

require __DIR__.'/auth.php';


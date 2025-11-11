<?php 
use App\Http\Controllers\VideoController;

Route::get('/videos', [VideoController::class, 'index']);
Route::post('/videos', [VideoController::class, 'store']);
Route::get('/videos/{id}', [VideoController::class, 'show']);

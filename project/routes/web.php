<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/ideas', [IdeaController::class, 'index']);
Route::get('/ideas/create', [IdeaController::class, 'create']);
Route::get('/ideas/{idea}', [IdeaController::class, 'create']);
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']); # wird intern aufgerufen um zu persistieren von der edit blade aus
Route::post('/ideas', [IdeaController::class, 'store']);
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

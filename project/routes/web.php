<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', [IdeaController::class, 'index']);
Route::get('/ideas/create', [IdeaController::class, 'create']);
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']); # wird intern aufgerufen um zu persistieren von der edit blade aus
Route::post('/ideas', [IdeaController::class, 'store']);
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);

Route::get('/register', [RegisteredUserController::class, 'create'] );
Route::post('/register', [RegisteredUserController::class, 'store'] );

Route::get('/login', [SessionsController::class, 'create'] );
Route::post('/login', [SessionsController::class, 'store'] );
Route::delete('/logout', [SessionsController::class, 'destroy']);

Route::get('/', function () {
    return redirect('/ideas');
});

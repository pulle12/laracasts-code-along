<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

Route::get('/', function () {
    $idea = Idea::find(1);
    // Stop bei Databases Video minute 17:30 (Video 8)

    return $idea;
    return view('ideas', [
        'ideas' => $ideas
    ]);
});
Route::post('/ideas', function () {
    $idea = request("idea");

    session()->push("ideas", $idea);

    return redirect("/");
});

// Temporary
Route::get('/delete-ideas', function () {
    session()->forget("ideas");

    return redirect("/");
});

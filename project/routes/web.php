<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

# view alle
Route::get('/ideas', function () {
    $ideas = Idea::all();

    return view('ideas.index', [
        'ideas' => $ideas
    ]);
});

# view für eines
Route::get('/ideas/{idea}', function (Idea $idea) { # in diesem Parameter ist ein Null Check (404) enthalten
    return view('ideas.show', [
        'idea' => $idea
    ]);
});

# eines ändern
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
        'idea' => $idea
    ]);
});

# wird intern aufgerufen um zu persistieren von der edit blade aus
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description')
    ]);

    return redirect('/ideas/' . $idea->id);
});

# eines erzeugen
Route::post('/ideas', function () {
    $idea = request("idea");

    Idea::create([
        'description' => request("description"),
        'state' => "pending",
    ]);

    return redirect("/ideas");
});

# löschen
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/ideas');
});

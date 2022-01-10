<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmsController extends Controller
{
    public function index() {
        $films = Film::all();
        return view ('films.index', [
            'films' => $films,
        ]);
    }

    public function create() {
        return view('films.create');
    }

    public function store(Request $request) {
        $newFilm = Film::create([
            'title' => $request->title
        ]);
        return redirect('/films');
    }

    public function show(Film $film)
    {
        return view('films.show', [
            'film' => $film
        ]);
    }

    public function edit(Film $film)
    {
        return view('films.edit', [
            'film' => $film
        ]);
    }

    public function update(Request $request, Film $film)
    {
        $film->update([
            'title' => $request->title,
            'rating' => $request->rating
        ]);

        return redirect('films/' . $film->id);
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect('/films');
    }

}

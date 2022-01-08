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
}

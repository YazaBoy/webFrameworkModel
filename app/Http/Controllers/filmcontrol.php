<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('films.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
            $data['poster'] = $posterPath;
        }

        Film::create($data);

        return redirect()->route('films.index');
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    public function edit(Film $film)
    {
        $genres = Genre::all();
        return view('films.edit', compact('film', 'genres'));
    }

    public function update(Request $request, Film $film)
    {
        $data = $request->all();

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('posters', 'public');
            $data['poster'] = $posterPath;
        }

        $film->update($data);

        return redirect()->route('films.index');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }
}
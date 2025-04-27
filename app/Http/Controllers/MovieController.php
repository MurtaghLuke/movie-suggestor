<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;



class MovieController extends Controller
{

    //delete and add only for admins
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!auth()->check() || !auth()->user()->is_admin) {
                abort(403, 'Unauthorized');
            }
            return $next($request);
        })->only(['create', 'store', 'edit', 'update', 'destroy']);
    }






    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'director' => 'nullable|max:255',
            'genre' => 'nullable|max:255',
            'release_year' => 'nullable|integer|min:1800|max:' . now()->year,
            'poster_url' => 'nullable|url|max:1000',
        ]);

        Movie::create($validated);

        return redirect()->route('movies.index')->with('success', 'Movie added successfully!');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'director' => 'nullable|max:255',
            'genre' => 'nullable|max:255',
            'release_year' => 'nullable|integer|min:1800|max:' . now()->year,
            'poster_url' => 'nullable|url|max:1000',
        ]);

        $movie->update($validated);

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully!');
    }



    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully!');
    }
}

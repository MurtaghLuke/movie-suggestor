<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class SuggestionController extends Controller
{


    public function showForm()
    {
        // get the different genres for the buttons
        $genres = Movie::select('genre')->distinct()->pluck('genre');
        return view('suggest.form', compact('genres'));
    }

    ////Handle the form suggestion and show a suggested movie
    public function suggest(Request $request)
    {
        $request->validate([
            'genre' => 'required|string'   //validate that user has selected a genre
        ]);

        $movie = Movie::where('genre', $request->genre)->inRandomOrder()->first();

        return view('suggest.result', [
            'movie' => $movie,
            'genre' => $request->genre
        ]);
    }


    //random movie
    public function surprise()
    {
    $movie = Movie::inRandomOrder()->first();
    return view('suggest.result', [
        'movie' => $movie,
        'genre' => 'Any Genre'
    ]);
    }

}

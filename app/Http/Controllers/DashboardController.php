<?php

namespace App\Http\Controllers;
use App\Models\Movie;

class DashboardController extends Controller
{
    public function index()
    {
        $latestMovies = Movie::latest()->take(10)->get();
        return view('dashboard', compact('latestMovies'));
    }
}

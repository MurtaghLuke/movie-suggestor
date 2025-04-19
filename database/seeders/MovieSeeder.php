<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::insert([
            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through dream-sharing.',
                'poster_url' => 'https://m.media-amazon.com/images/I/81p+xe8cbnL._AC_SL1500_.jpg',
                'genre' => 'Sci-Fi',
                'release_year' => 2010,
                'director' => 'Christopher Nolan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control to his reluctant son.',
                'poster_url' => 'https://m.media-amazon.com/images/I/51rOnIjLqzL._AC_.jpg',
                'genre' => 'Crime',
                'release_year' => 1972,
                'director' => 'Francis Ford Coppola',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Spirited Away',
                'description' => 'A young girl enters a world of spirits to save her parents.',
                'poster_url' => 'https://media.posterlounge.com/img/products/770000/762649/762649_poster.jpg',
                'genre' => 'Fantasy',
                'release_year' => 2001,
                'director' => 'Hayao Miyazaki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
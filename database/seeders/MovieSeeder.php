<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;


class MovieSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('movies')->truncate(); /////clears old data so duplicates dont show up everytime i seed

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

            [
                'title' => 'The Matrix',
                'description' => 'A computer hacker learns about the true nature of his reality.',
                'poster_url' => 'https://m.media-amazon.com/images/I/51EG732BV3L.jpg',
                'genre' => 'Sci-Fi',
                'release_year' => 1999,
                'director' => 'The Wachowskis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pulp Fiction',
                'description' => 'The lives of two mob hitmen, a boxer, and others intertwine.',
                'poster_url' => 'https://m.media-amazon.com/images/I/71c05lTE03L._AC_SY679_.jpg',
                'genre' => 'Crime',
                'release_year' => 1994,
                'director' => 'Quentin Tarantino',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'The Dark Knight',
                'description' => 'Batman must accept one of the greatest psychological and physical tests.',
                'poster_url' => 'https://m.media-amazon.com/images/I/51Qvs9i5a%2BL._AC_.jpg',
                'genre' => 'Action',
                'release_year' => 2008,
                'director' => 'Christopher Nolan',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            
            [
                'title' => 'Fight Club',
                'description' => 'An insomniac and a soap maker form an underground club.',
                'poster_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLw1e05_zatEU0fSuVtS_iYOP7IU25Dj_51s7VReAJmmnOkyjuxtBm_UCL8XQagX2Q5dM&usqp=CAU',
                'genre' => 'Drama',
                'release_year' => 1999,
                'director' => 'David Fincher',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'The life journey of a simple man with a big heart.',
                'poster_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN_76EybIyj6iIRPGoLg-VPRDJLX74ydCKbQ&s',
                'genre' => 'Drama',
                'release_year' => 1994,
                'director' => 'Robert Zemeckis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Interstellar',
                'description' => 'A team travels through a wormhole to ensure humanity’s survival.',
                'poster_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK6tdN2LCV5E1ktnQu82L6m4JX8kP4UwnLJQ&s',
                'genre' => 'Sci-Fi',
                'release_year' => 2014,
                'director' => 'Christopher Nolan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over years, finding redemption.',
                'poster_url' => 'https://m.media-amazon.com/images/I/519NBNHX5BL._AC_.jpg',
                'genre' => 'Drama',
                'release_year' => 1994,
                'director' => 'Frank Darabont',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'description' => 'A meek hobbit begins a journey to destroy a powerful ring.',
                'poster_url' => 'https://m.media-amazon.com/images/I/51Qvs9i5a+L._AC_.jpg',
                'genre' => 'Fantasy',
                'release_year' => 2001,
                'director' => 'Peter Jackson',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Lion King',
                'description' => 'A lion cub’s journey to adulthood and acceptance.',
                'poster_url' => 'https://rukminim2.flixcart.com/image/850/1000/kyvvtzk0/poster/j/v/t/medium-the-lion-king-limited-matte-finish-poster-urbanprint5711-original-imagbygdzhgshzmz.jpeg?q=90&crop=false',
                'genre' => 'Animation',
                'release_year' => 1994,
                'director' => 'Roger Allers & Rob Minkoff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Parasite',
                'description' => 'Greed and class discrimination threaten the relationship between families.',
                'poster_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTe87QDvtosKzPeZqu0Aks547uXOG8hXlqypw&s',
                'genre' => 'Thriller',
                'release_year' => 2019,
                'director' => 'Bong Joon-ho',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Joker',
                'description' => 'A mentally troubled comedian embarks on a downward spiral.',
                'poster_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROBJqux5xMDPJ_34mm2FQQePOKfTV9yWpmOA&s',
                'genre' => 'Crime',
                'release_year' => 2019,
                'director' => 'Todd Phillips',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Avengers: Endgame',
                'description' => 'The Avengers assemble to reverse the damage caused by Thanos.',
                'poster_url' => 'https://m.media-amazon.com/images/I/81ExhpBEbHL._AC_SY679_.jpg',
                'genre' => 'Action',
                'release_year' => 2019,
                'director' => 'Anthony and Joe Russo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Titanic',
                'description' => 'A young couple from different classes fall in love on the ill-fated ship.',
                'poster_url' => 'https://images-cdn.ubuy.co.id/634e36686f87062ff57e6463-titanic-movie-poster-2-sided-original.jpg',
                'genre' => 'Romance',
                'release_year' => 1997,
                'director' => 'James Cameron',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Whiplash',
                'description' => 'A young drummer pushes his limits under a ruthless instructor.',
                'poster_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIZQYke1hgTSW5mwGD7Ihggs20mD3Rg7rj7w&s',
                'genre' => 'Drama',
                'release_year' => 2014,
                'director' => 'Damien Chazelle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Her',
                'description' => 'A lonely man falls in love with an AI operating system.',
                'poster_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3YIAtXdAbbo3qzNcOkMHj_wgRSkMERDYGEg&s',
                'genre' => 'Romance',
                'release_year' => 2013,
                'director' => 'Spike Jonze',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Grand Budapest Hotel',
                'description' => 'A legendary concierge gets involved in a murder mystery.',
                'poster_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2MTMEcy4vObeAp-O--c7tShFgon6U3ncN1w&s',
                'genre' => 'Comedy',
                'release_year' => 2014,
                'director' => 'Wes Anderson',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Social Network',
                'description' => 'The founding of Facebook and the drama behind it.',
                'poster_url' => 'https://i.etsystatic.com/6285100/r/il/49d503/2435521859/il_570xN.2435521859_jupb.jpg',
                'genre' => 'Drama',
                'release_year' => 2010,
                'director' => 'David Fincher',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            
        ]);
    }
}
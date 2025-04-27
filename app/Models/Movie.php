<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Movie extends Model
{
    use HasFactory;
    ///now allows mass assignment.
    protected $fillable = [
        'title',
        'description',
        'director',
        'genre',
        'release_year',
        'poster_url',
    ];
}

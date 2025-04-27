@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Add a New Movie</h1>


    
    <form method="POST" action="{{ route('movies.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block">Title</label>
            <input type="text" name="title" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block">Director</label>
            <input type="text" name="director" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block">Genre</label>
            <input type="text" name="genre" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block">Release Year</label>
            <input type="number" name="release_year" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block">Poster URL</label>
            <input type="url" name="poster_url" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block">Description</label>
            <textarea name="description" class="w-full border rounded p-2"></textarea>
        </div>
        <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded">
            Save Movie
        </button>
    </form>
</div>
@endsection

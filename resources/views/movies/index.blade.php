@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-6">Movie List</h1>

    <a href="{{ route('movies.create') }}" class="mb-4 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
        + Add Movie
    </a>

    @if($movies->isEmpty())
        <p class="text-gray-600">No movies yet.</p>
    @else
        <ul class="space-y-4">
            @foreach($movies as $movie)
            <li class="bg-white dark:bg-gray-800 rounded p-4 shadow flex flex-col sm:flex-row items-start gap-4">
                @if($movie->poster_url)
                <img src="{{ $movie->poster_url }}" alt="{{ $movie->title }}" style="width: 150px; height: auto;" class="rounded shadow object-cover">
                @endif
        
                <div>
                    <h2 class="text-xl font-semibold">{{ $movie->title }} ({{ $movie->release_year }})</h2>
                    <p class="text-sm text-gray-400 italic">Directed by {{ $movie->director }}</p>
                    <p class="text-sm text-gray-500 mb-2">{{ $movie->genre }}</p>
                    <p class="mt-2">{{ $movie->description }}</p>
                </div>
            </li>
            <form action="{{ route('movies.destroy', $movie) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE')
            
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                    Delete
                </button>
            </form>
        @endforeach
        </ul>
    @endif
</div>
@endsection

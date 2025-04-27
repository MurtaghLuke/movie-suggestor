@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <h1 class="text-3xl font-bold mb-6 text-center">Movie List</h1>

    {{-- Add Movie button for admin only --}}
    @auth
        @if (auth()->user()->is_admin)
            <div class="text-center mb-8">
                <a href="{{ route('movies.create') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded">
                    + Add Movie
                </a>
            </div>
        @endif
    @endauth

    @if($movies->isEmpty())
        <p class="text-gray-600 text-center">No movies yet.</p>
    @else
    
    
    
    {{-- //movie grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        {{--tailwind to make grid system responsive to different screen sizes. --}}

        {{-- grid-cols-1: 1 column for mobile --}}
        {{-- sm:grid-cols-2: 2 columns on small screens --}}
        {{-- md:grid-cols-3: 3 columns on medium screens --}}
        {{-- lg:grid-cols-4: 4 columns on large screens --}}
        {{-- gap-8: nice spacing between the cards --}}
        
        @foreach($movies as $movie)
            
            {{-- and each card in the grid--}}
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden flex flex-col">
                @if($movie->poster_url)
                    <img src="{{ $movie->poster_url }}" alt="{{ $movie->title }}" class="w-full h-64 object-cover">
                @endif

                <div class="p-4 flex flex-col flex-grow">
                    {{-- title and year hrading --}}
                    <h2 class="text-lg font-semibold mb-2">{{ $movie->title }} ({{ $movie->release_year }})</h2> 
                    <p class="text-gray-400 text-sm italic">Directed by {{ $movie->director }}</p>
                    <p class="text-gray-500 text-sm mb-4">{{ $movie->genre }}</p>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">{{ Str::limit($movie->description, 80) }}</p>

                    {{-- Admin only delete button --}}
                    @auth
                        @if (auth()->user()->is_admin)
                            <form action="{{ route('movies.destroy', $movie) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mt-auto bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full">
                                    Delete
                                </button>
                            </form>
                        @endif
                    @endauth
                </div>
            </div>
        @endforeach
    </div>
    @endif
</div>
@endsection

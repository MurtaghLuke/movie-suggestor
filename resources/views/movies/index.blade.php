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
    



    {{-- filter and sort dropdown in movies list page --}}
    <form method="GET" class="mb-6 flex flex-wrap gap-4 items-center justify-center">
        <select name="genre" class="border p-2 rounded">
            <option value="">All Genres</option>
            @foreach ($genres as $genre)
                <option value="{{ $genre }}"  {{ request('genre') == $genre ? 'selected' : '' }}>{{ $genre }}</option>
            @endforeach
        </select>
    
        <select name="sort" class=" border p-2 rounded">
            <option value="">Sort By</option>

            <option value="title_asc" {{ request('sort') == 'title_asc' ? 'selected' : '' }}>Title A–Z</option>
            <option value="title_desc" {{ request('sort') == 'title_desc' ? 'selected' : '' }}>Title Z–A</option>
            <option value="year_asc" {{ request('sort') == 'year_asc' ? 'selected' : '' }}>Oldest First</option>
            <option value="year_desc" {{ request('sort') == 'year_desc' ? 'selected' : '' }}>Newest First</option>
        </select>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Apply</button>
    </form>
    





    
    
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


{{-- DEBUG: This is from index.blade.php --}}

@endsection

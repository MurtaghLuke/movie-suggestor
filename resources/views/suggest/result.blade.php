@extends('layouts.app')



@section('content')
<div class="max-w-xl mx-auto mt-10 text-center">
    <h1 class="text-2xl font-bold mb-4">Suggestion for "{{ $genre }}"</h1>

    @if ($movie)
        <!-- Display the selected movie -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <img src="{{ $movie->poster_url }}" alt="{{ $movie->title }}"  class="mx-auto rounded mb-4 max-h-80 object-contain">
            <h2 class=" text-xl font-semibold">{{ $movie->title }} ({{ $movie->release_year }})</h2>
            <p class="text-gray-400 italic">Directed by {{ $movie->director }}</p>
            <p class="text-sm mt-2">{{ $movie->description }}</p>
        </div>
    @else
        <!--Message if no movie found -->
        <p class="text-gray-600">No movie found for this genre.</p>
    @endif





    <!--   retry link  -->
    <a href="{{ route('suggest.form') }}" class="mt-6 inline-block text-indigo-600 hover:underline">Try Again</a>
</div>
@endsection

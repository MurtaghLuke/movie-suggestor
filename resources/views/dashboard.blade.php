@extends('layouts.app')

@section('content')


{{-- Welcome banner.--}}

{{-- gradient from left to right. red to blue.  --}}
<section class="bg-gradient-to-r from-red-600 to-blue-600 text-white py-20 text-center">
    {{-- max width 4x1. horizontal margin is auto, and padding of 4px --}}
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-extrabold mb-4">Welcome to our Movie Suggestor</h1>
        {{-- text extra large. margin bottom of 4 --}}
        <p class="text-xl mb-8">Find the next film for you.</p>
        {{-- movie suggestion button. bg is white. text indigo. rounded and changes color when hovered on.            transition duration-300 ease-in-out  adds animation to button when hovered on--}}    
        <a href="{{ route('suggest.form') }}"
           class="bg-white text-indigo-700 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-100 transition duration-300 ease-in-out">
            🎬 Get a Movie Suggestion
        </a>
    </div>
</section>



{{-- Features divs with emojis --}}

{{--vertical padding of 4. light grey bg --}}
<section class="py-16 bg-gray-100">
    {{--max width of container 6x1 for large screens. horizontal auto margins. padding on left+right. css grid layout. gap of 10 between grid items.--}}
    {{-- md:grid-cols-3 on medium screens and bigger use 3 columns. and centre all text.--}}
    <div class="max-w-6xl mx-auto px-4 grid gap-10 grid-cols-1 md:grid-cols-3 text-center">
        <div>
            <div class="text-4xl mb-2">🔍</div>
            <h3 class="text-xl font-bold mb-2">Smart Suggestions</h3>
            <p class="text-gray-600">Pick a genre and let the system suggest something for you.</p>
        </div>
        <div>
            <div class="text-4xl mb-2"> 😮 </div>
            <h3 class="text-xl font-bold mb-2">Surprise Me! Feature</h3>
            <p class="text-gray-600">Looking for something different? Use our random movie generator.</p>
        </div>
        <div>
            <div class="text-4xl mb-2">⚙️</div>
            <h3 class="text-xl font-bold mb-2">Admin Features</h3>
            <p class="text-gray-600">Add or delete movies in the movies page (admin only).</p>
        </div>
    </div>
</section>


{{-- scrollable wheel --}}
@if ($latestMovies->count())
<section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Latest Movies</h2>
        {{-- overflow x auto - allows scolling on smaller screens. flex makes child elements align in row. --}}
        <div class="overflow-x-auto flex space-x-6 pb-4">
            @foreach ($latestMovies as $movie)
                {{-- flex shrink keeps movies from shrinking on smaller screens. shadow md gives boxes a shadow. --}}
                <div class="flex-shrink-0 w-60 bg-white rounded-lg shadow-md">
                    @if ($movie->poster_url)
                        {{-- object cover - image covers the whole space. rounded-t-lg. - rounds only the top corners. --}}
                        <img src="{{ $movie->poster_url }}" alt="{{ $movie->title }}"
                             class="w-full h-72 object-cover rounded-t-lg">
                    @endif
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-800">{{ $movie->title }}</h3>
                        <p class="text-sm text-gray-500 ">{{ $movie->genre }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif




@endsection

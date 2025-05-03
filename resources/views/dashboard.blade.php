@extends('layouts.app')

@section('content')

<div class="py-10 text-center">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Movie Suggestor</h1>
    <p class="text-lg text-gray-600 mb-6">Find your next favorite film.</p>
    <a href="{{route('suggest.form') }}" class="bg-indigo-600 text-white py-2 px-4 rounded">
        Get a Movie Suggestion
    </a>
</div>
@endsection

@extends('layouts.app')


@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <h1 class="text-2xl font-bold text-center mb-6">Get a Movie Suggestion</h1>

    <!-- genre selection form  -->
    <form action="{{ route('suggest.result') }}" method="POST" class="text-center">
        @csrf

        <!--genre buttons -->
        <div class="flex flex-wrap justify-center gap-2 mb-4">
            @foreach($genres as $genre)
                <label class="cursor-pointer">
                    <!----hidden radio input to ensure only one option can be selected-->
                    <input type="radio" name="genre" value="{{ $genre }}" class="hidden peer">


                    <!--  button  -->
                    <div class="px-4 py-2 rounded-full border peer-checked:bg-indigo-600 peer-checked:text-white transition">
                        {{ $genre }}
                    </div>
                </label>
            @endforeach
        </div>


        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded">
            Suggest a Movie
        </button>
    </form>
</div>
@endsection

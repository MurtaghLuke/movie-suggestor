@extends('layouts.app')


@section('content')
<div class="">
    <h1 class="text-2xl font-bold text-center">Get a Movie Suggestion</h1>

    <!-- genre selection form  -->
    <form action="{{ route('suggest.result') }}" method="POST" class="text-center">
        @csrf

        <!--genre buttons -->
        <div class="flex flex-wrap justify-center">
            @foreach($genres as $genre)
                <label class="cursor-pointer">
                    <!----hidden radio input to ensure only one option can be selected-->
                    <input type="radio" name="genre" value="{{ $genre }}" class="hidden peer">


                    <!--  button  -->
                    <div class="px-4 py-2 rounded-full">
                        {{ $genre }}
                    </div>
                </label>
            @endforeach
        </div>


        <button type="submit" class="text-white font-bold">
            Suggest a Movie
        </button>
    </form>
</div>
@endsection

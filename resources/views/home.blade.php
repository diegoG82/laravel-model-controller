@extends('layouts.app');

@section('content') 
<div class="container">
    <div class="row row-cols-5">
        @foreach ($movies as $movie)
            <div class="col mb-1 mt-2">
                <div class="card mt-2 mb-2">
                    <img class="card-img-top" src="{{ $movie->image }}" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">Og Title: {{ $movie->original_title }}</p>
                        <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                        <p class="card-text">Release Date: {{ $movie->date }}</p>
                        <p class="card-text">Vote: {{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
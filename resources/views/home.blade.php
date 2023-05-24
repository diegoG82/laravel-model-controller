<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>


<body>
    {{-- @foreach ($movies as $movie)
        <ul>
            <li>{{ $movie->title }}</li>
            <li>{{$movie->original_title}}</li>
            <li>{{$movie->nationality}}</li>
            <li>{{$movie->date}}</li>
            <li>{{$movie->vote}}</li>
            <li> <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
               </li>
           
            
        </ul>
    @endforeach --}}


    <div class="container">
        <div class="row row-cols-5">
            @foreach ($movies as $movie)
                <div class="col mb-1 mt-4">
                    <div class="card">
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






</body>

</html>

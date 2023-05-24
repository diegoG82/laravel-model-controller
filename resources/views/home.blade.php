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
    @foreach ($movies as $movie)
        <ul>
            <li>{{ $movie->title }}</li>
            <li>{{$movie->original_title}}</li>
            <li>{{$movie->nationality}}</li>
            <li>{{$movie->date}}</li>
            <li>{{$movie->vote}}</li>
            <li> <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
               </li>
           
            
        </ul>
    @endforeach
</body>

</html>

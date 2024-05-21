<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies.it</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    <main>
        <div class="container d-flex flex-wrap justify-content-between ">
        @foreach ($movies as $movie)
        <div class="card my-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                <p class="card-text">Lingua: {{ $movie->nationality }}</p>
                <div>
                    <span  class="card-text">{{ $movie->date }}</span>
                    <span  class="card-text ms-5">Voto: {{ $movie->vote }}</span>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </main>
</body>
</html>
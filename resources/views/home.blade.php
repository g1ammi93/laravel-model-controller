<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Film</h1>
        <div class="row mt-3">
            @foreach ($movies as $movie)
                <div class=" col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie->title }}</h4>
                            <p class="card-text">{{ $movie->original_title }}</p>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <p class="card-text">{{ $movie->date }}</p>
                            <p class="card-text">{{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>

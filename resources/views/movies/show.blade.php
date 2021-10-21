<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $movie->title }}</title>
    <link rel="stylesheet" href="css/app.css">
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1><b>{{ $movie->title }}</b></h1>
            <p>original title: <b>{{ $movie->original_title }}</b></p>
            <p>nationality: <b>{{ $movie->nationality }}</b></p>
            <p>release date: <b>{{ $movie->date }}</b></p>
            <p>vote: <b>{{ $movie->vote }}</b></p>
            <div style="margin-top: 40px">
                <p>overview: <em>"{{ $movie->overview }}"</em></p>
            </div>
            <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
            <form action="">
                <a href="{{ route('movies.destroy', $movie->id) }}">Delete</a>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>

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
            <p style="margin: 40px 0 30px 0" ><small>created at: {{ $movie->getCreatedAt() }}</small><br>
            <small>updated at: {{ $movie->getUpdatedAt() }}</small></p>
            <button style="margin-bottom: 5px"><a href="{{ route('movies.edit', $movie->id) }}" style="color: currentColor; text-decoration: none">Edit</a></button>
            <form method="POST" action="{{ route('movies.destroy', $movie->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>

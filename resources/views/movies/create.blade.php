<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create your Movie</title>
    <style>
        label {
            margin: 30px 0 5px 0;
            display: block
        }
        button {
            margin-top: 30px;
            display: block;
        }
    </style>
</head>
<body>
    <form method='POST' action="{{ route('movies.store') }}">
        @csrf
        @if ($errors->any())
            <ul style="padding: 10px 0 10px 25px ; background-color: rgb(246, 183, 193); border-radius: 10px; color: rgb(134, 0, 22); border: 1px solid rgb(134, 0, 22)">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <label for="title">Title</label>
        <input type="text" name='title' id='title'>
        <label for="original_title">Original title</label>
        <input type="text" name='original_title' id='original_title'>
        <label for="nationality">Nationality</label>
        <input type="text" name='nationality' id='nationality'>
        <label for="date">Release date</label>
        <input type="text" name='date' id='date'>
        <label for="vote">Vote</label>
        <input type="text" name='vote' id='vote'>
        <label for="overview">Overview</label>
        <textarea name="overview" id="overview" cols="30" rows="10"></textarea>
        <label for="poster_path">Poster path</label>
        <textarea name="poster_path" id="poster_path" cols="30" rows="6"></textarea>
        <button type="submit">Create</button>
    </form>
</body>
</html>
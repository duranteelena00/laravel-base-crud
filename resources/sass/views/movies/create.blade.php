<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <label for="title">Title</label>
        <input type="text" name='title' id='title'>
        <label for="overview">Descrizione</label>
        <textarea name="overview" id="overview" cols="30" rows="10"></textarea>
        <button type="submit">Invia</button>
    </form>
</body>
</html>
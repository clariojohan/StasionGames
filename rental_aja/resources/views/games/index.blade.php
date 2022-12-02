<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($games as $game)
        <p>{{ $game }}</p>
        @foreach ($game->gameImages as $image)
            <img src="/image/game/{{ $image->path }}" alt="">
        @endforeach
    @endforeach
</body>

</html>

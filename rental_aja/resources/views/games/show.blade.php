<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Title: {{ $game->title }}</p>
    <p>Release Date: {{ $game->release_date }}</p>
    <p>Description: {{ $game->description }}</p>
    <p>Rating: {{ $game->rating }}</p>
    <p>Price: {{ $game->price }}</p>
    <p>Publisher: {{ $game->publisher->name }}</p>
    <p>Genre:
        @foreach ($game->genres as $genre)
            {{ $genre->name }},
        @endforeach
    </p>
    <p>Platform:
        @foreach ($game->platforms as $platform)
            {{ $platform->name }},
        @endforeach
    </p>
    {{-- <p>{{ $game->release_date }}</p> --}}
    <p>Image:</p>
    @foreach ($game->gameImages as $image)
        <img src="{{ asset('storage/' . $image->path) }}" alt="" style="width: 150px; height: 150px;">
    @endforeach
    <div class="">
        <a href="/games/{{ $game->id }}/edit">
            <button>Update</button>
        </a>
        <form method="POST" action="/games/{{ $game->id }}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </div>
</body>

</html>

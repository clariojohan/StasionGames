<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        {!! implode('', $errors->all('<div style="color: red;">:message</div>')) !!}
    @endif
    <p>Title: 
        
    </p>
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
    <div class="" style="border: 1px solid black; width: 50%;">
        <h2>Client Feature</h2>
        <form method="POST" action="/carts" enctype="multipart/form-data">
            @csrf
            <input type="text" name='game_id' value="{{ $game->id }}" hidden>
            <div class="" style="display: flex">
                <label for="type">Release Date</label>
                <select name="type" id="type">
                    <option value="physical">Physical</option>
                    <option value="digital">Digital</option>
                </select>
            </div>
            <div class="" style="display: flex">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity">
            </div>
            <button>Add to cart</button>
        </form>
    </div>
    <div class="" style="border: 1px solid black; width: 50%;">
        <h2>Admin Feature</h2>
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

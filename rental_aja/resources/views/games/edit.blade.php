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
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('games.update', $game) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="" style="display: flex">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $game->title }}">
        </div>
        <div class="" style="display: flex">
            <label for="release_date">Release Date</label>
            <input type="date" name="release_date" value="{{ $game->release_date }}">
        </div>
        <div class="" style="display: flex">
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ $game->description }}">
        </div>
        <div class="" style="display: flex">
            <label for="rating">Rating</label>
            <input type="text" name="rating" value="{{ $game->rating }}">
        </div>
        <div class="" style="display: flex">
            <label for="price">Price</label>
            <input type="number" name="price" value="{{ $game->price }}">
        </div>
        <div class="" style="display: flex">
            <label for="publisher_id">Publisher</label>
            <select name="publisher_id" id="publisher_id">
                @foreach ($publishers as $publisher)
                <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                @endforeach
            </select>
        </div>
        <p>Old Value: {{ $game->publisher->name }}</p>
        <div class="" style="display: flex">
            <label for="genre_id">Genre</label>
            <select multiple name="genre_id[]" id="genre_id">
                @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <p>Old Value:
            @foreach ($game->genres as $genre)
            {{ $genre->name }},
            @endforeach
        </p>
        <div class="" style="display: flex">
            <label for="platform_id">Platform</label>
            <select multiple name="platform_id[]" id="platform_id">
                @foreach ($platforms as $platform)
                <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                @endforeach
            </select>
        </div>
        <p>Old Value:
            @foreach ($game->platforms as $platform)
            {{ $platform->name }},
            @endforeach
        </p>
        <div class="" style="display: flex">
            <label for="images">Image</label>
            <input type="file" multiple name="images[]" id="images">
        </div>
        <p>Old Value:
            @foreach ($game->gameImages as $image)
            <img src="{{ asset('storage/' . $image->path) }}" alt="" style="width: 150px; height: 150px;">
            @endforeach
        </p>
        <button>Update</button>
    </form>
</body>

</html>
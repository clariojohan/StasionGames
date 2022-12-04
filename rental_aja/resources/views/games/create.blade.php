<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/games" enctype="multipart/form-data">
        @csrf
        <div class="" style="display: flex">
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>
        <div class="" style="display: flex">
            <label for="release_date">Release Date</label>
            <input type="date" name="release_date">
        </div>
        <div class="" style="display: flex">
            <label for="description">Description</label>
            <input type="text" name="description">
        </div>
        <div class="" style="display: flex">
            <label for="rating">Rating</label>
            <input type="text" name="rating">
        </div>
        <div class="" style="display: flex">
            <label for="price">Price</label>
            <input type="number" name="price">
        </div>
        <div class="" style="display: flex">
            <label for="publisher_id">Publisher</label>
            <select name="publisher_id" id="publisher_id">
                @foreach ($publishers as $publisher)
                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="" style="display: flex">
            <label for="genre_id">Genre</label>
            <select multiple name="genre_id[]" id="genre_id">
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="" style="display: flex">
            <label for="platform_id">Platform</label>
            <select multiple name="platform_id[]" id="platform_id">
                @foreach ($platforms as $platform)
                    <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="" style="display: flex">
            <label for="images">Image</label>
            <input type="file" multiple name="images[]" id="images">
        </div>
        <button>Create</button>
    </form>
</body>

</html>

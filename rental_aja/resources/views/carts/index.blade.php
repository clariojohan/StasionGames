<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('transactions.create') }}" method="GET">
        @foreach ($cart_items as $item)
            <input type="checkbox" name="item_id[]" id="item_id" value="{{ $item->id }}">
            <p>Id: {{ $item->id }}</p>
            <p>Game Title: {{ $item->game->title }}</p>
            <p>Game Price: {{ $item->game->price }}</p>
            <p>Quantity: {{ $item->quantity }}</p>
            <p>Total Price: {{ $item->game->price * $item->quantity }}</p>
            <hr>
        @endforeach
        <button>Pay</button>
    </form>
</body>

</html>

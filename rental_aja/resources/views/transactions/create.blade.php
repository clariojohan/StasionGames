<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        @foreach ($items as $item)
            <p>{{ $item }}</p>
            <p>{{ $item->game }}</p>
            <input type="text" name='item_id[]' value="{{ $item->id }}" hidden>
        @endforeach
        <label for="address">Address</label>
        <input type="text" name="address">
        <button>Pay</button>
    </form>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Transaction Id: {{ $transaction->id }}</p>
    <p>Payment Status: {{ $transaction->status }}</p>
    @foreach ($transaction->items as $item)
        <p>Item: {{ $item }}</p>
    @endforeach
    @if ($transaction->status === 'paid')
        <p>Payment Id: {{ $transaction->payment->id }}</p>
        <p>Payment Type: {{ $transaction->payment->type }}</p>
        <p>Invoice: {{ $transaction->payment->invoice }}</p>
    @else
        <form action="{{ route('transactions.update', $transaction->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="payment_type">Payment Type</label>
            <select name="payment_type" id="payment_type">
                <option value="bank">Bank</option>
                <option value="e-money">E-Money</option>
            </select>
            <button>Pay Now</button>
        </form>
    @endif
</body>

</html>

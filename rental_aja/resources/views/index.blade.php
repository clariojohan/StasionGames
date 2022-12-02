<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Aja - Dashboard</title>
</head>

<body>
    <h1>Dashboard On Progress</h1>

    <h2>Welcome, {{$name}}</h2>

    {{-- temporary logout button --}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>
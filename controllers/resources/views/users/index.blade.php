<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Users list: </h1>

    @if($users)
        <p>Hay elementos</p>
    @foreach($users as $user)
        <li>{{$user->name}}</li>
        <li>{{$user->age}}</li>
        <li>{{$user->address}}</li>

        <p></p>
    @endforeach

    @elseif($users->isEmpty())
    <p>No hay elementos</p>
    @endif
</body>
</html>
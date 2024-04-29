<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Shopping list</h1>
    <a href="/shoplist">Shopping list</a>
    <a href="create">Create a list</a>

   
    <form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>


    <ul>
        @foreach ($posts as $post)
        <li><a href="show/{{$post->id }}">{{$post->name }}: {{$post-> amount }} </a></li>
        @endforeach
    </ul>
</body>

</html>

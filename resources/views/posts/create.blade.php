<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
     <link rel="stylesheet" href="style.css">
</head>
<h1>Create a shopping list</h1>

<body>
    <form method="POST" action="/store">
        @csrf
        <label>
            Name of the product:
            <input name="name">
        </label>
        <label>
            Amount of the product:
            <input name="amount">
        </label>
        <button>Create</button>
    </form>
</body>

</html>
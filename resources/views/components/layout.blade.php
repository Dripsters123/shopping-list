<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yes</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @auth
    <nav>
        <a class="main-page" href="/shoplist">Main Page</a>
        @isset($showButton)
            @if($showButton)
                <a href="create" class="create-button">+</a>
            @endif
        @endisset
        <div class="username">
            User:
            @if(Auth::check())
                {{ Auth::user()->name }}
            @endif
        </div>
    </nav>
    @endauth
    {{ $slot }}
</body>
</html>

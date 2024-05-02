<link href="{{ asset('style.css') }}" rel="stylesheet">

<h1 class="h1-pages">Login</h1>

<div class="containers">
    <form method="POST" action="{{ route('doLogin') }}">
        @csrf

        <div class="input-container">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Login">
        </div>
    </form>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="register-button">
        <a href="{{ route('register') }}">
            <input type="button" value="Register">
        </a>
    </div>
</div>

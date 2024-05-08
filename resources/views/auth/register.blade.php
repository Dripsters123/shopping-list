<link href="{{ asset('style.css') }}" rel="stylesheet">

<h1 class="h1-pages">Register</h1>

<div class="reg-container">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-reg">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus><br>

            <label for="email">E-Mail Address:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>

            <label for="password-confirm">Confirm Password:</label><br>
            <input type="password" id="password-confirm" name="password_confirmation" required><br>

            <button>Register</button>
        </div>
    </form>
</div>
<x-layout>


<h1 class="h1-login">Login</h1>

<div class="login-container">
    <form method="POST" action="{{ route('doLogin') }}">
        @csrf

        <div class="input-login">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus><br>
            @error('loginError')
                <small class="text-danger">{{ $message }}</small><br>
            @enderror

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            @error('loginError')
                <small class="text-danger">{{ $message }}</small>
            @enderror

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
</x-layout>
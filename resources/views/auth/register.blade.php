<link href="{{ asset('style.css') }}" rel="stylesheet">
<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name">Name</label>
    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

    <label for="email">E-Mail Address</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required>

    <label for="password">Password</label>
    <input id="password" type="password" name="password" required>

    <label for="password-confirm">Confirm Password</label>
    <input id="password-confirm" type="password" name="password_confirmation" required>

    <button type="submit">Register</button>
</form>

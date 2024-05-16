
<x-layout>
<h1 class="h1-reg">Register</h1>

<div class="reg-container">
    <form method="POST" action="{{ route('register') }}">
        @csrf

     <div class="input-reg">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus><br>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="email">E-Mail Address:</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
 
    <label for="password">Password:</label><br>
    <small class="small-text"> 8 characters, contain 1 uppercase, 1 lowercase, 1 special symbol and 1 number.</small><br>
    <input type="password" id="password" name="password" required><br>
   
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="password-confirm">Confirm Password:</label><br>
    <input type="password" id="password-confirm" name="password_confirmation" required oninput="check(this)"><br>
    <script language='javascript' type='text/javascript'>
        function check(input) {
            if (input.value != document.getElementById('password').value) {
                input.setCustomValidity('Password Must be Matching.');
            } else {
                // input is valid -- reset the error message
                input.setCustomValidity('');
            }
        }
    </script>

    <input type="submit" value="Register">
</div>


    </form>
</div>
</x-layout>
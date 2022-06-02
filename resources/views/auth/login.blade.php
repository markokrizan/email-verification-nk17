<h3>Login</h3>

@if(isset($valid_credentials) && !$valid_credentials)
    <span>Invalid credentials</span>
@endif

<form action="/login" method="POST">
    @csrf
    Email: <input type="email" name="email" /> 
    <br/>
    @error('email')
        {{ $message }}
    @enderror
    <br/>
    Password: <input type="password" name="password" /> 
    <br/>
    @error('password')
        {{ $message }}
    @enderror
    <br/>
    <button type="submit">Login</button>
</form>

<a href="/register">Don't have an account?</a>

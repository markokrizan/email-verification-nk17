<h3>Register</h3>

<form action="/register" method="POST">
    @csrf
    Name: <input type="text" name="name" /> 
    <br/>
    @error('name')
        {{ $message }}
    @enderror
    <br/>
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
    Password confirmation: <input type="password" name="password_confirmation" /> 
    <br/>
    @error('password_confirmation')
        {{ $message }}
    @enderror
    <br/>
    <button type="submit">Register</button>
</form>

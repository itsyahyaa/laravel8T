<h1>Session Login</h1>

<form action="log" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter Your Name"><br>
    <span class="li">
        @error('user'){{$message}}
        @enderror</span>
    <br>
    <input type="password" name="passward" placeholder="Enter Your Passward"><br>
    <span class="li">
        @error('passward'){{$message}}
        @enderror</span>
    <br>
    <button type="submit">Login</button>
</form>

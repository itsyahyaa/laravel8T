<h1>User Login</h1>
{{-- Error in Li format --}}


{{-- @if($errors->any())
@foreach ($errors->all() as $item)
<li class="li">{{$item}}</li>
@endforeach
@endif --}}

{{-- Other Error --}}
<h1>NO Acess</h1>

<form action="htmlform" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Your ID"><br>
    <span class="li">
        @error('username'){{$message}}
        @enderror</span>
    <br>
    <input type="password" name="userpassword" placeholder="Enter Your Password"><br>
    <span class="li">
        @error('userpassword'){{$message}}
        @enderror</span>
    <br>
    <button type="submit">Login </button>
</form>

<style>
    .li{
        color: red;
    }
</style>

<h1>Update Member</h1>
<form action="/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" value="{{$data['name']}}"><br><br>
    <input type="email" name="email" value="{{$data['email']}}"><br><br>
    <input type="text" name="address" value="{{$data['address']}}"><br><br>
    <button type="submit">Update member</button>

</form>

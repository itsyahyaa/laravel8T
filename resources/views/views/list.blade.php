<h1>Member's List</h1>
<table border="1">
<tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Address</td>
    <td>Operation</td>
    <td>Operation</td>
</tr>
@foreach($members as $user)
<tr>
    <td>{{$user['id']}}</td>
    <td>{{$user['name']}}</td>
    <td>{{$user['email']}}</td>
    <td>{{$user['address']}}</td>
    <td><a href={{"delete/".$user['id']}}>Delete</a></td>
    <td><a href={{"edit/".$user['id']}}>Edit</a></td>
</tr>
@endforeach
</table>


{{-- <span>
    {{$members->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style> --}}

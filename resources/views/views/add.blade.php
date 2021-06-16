<h1>Add member</h1>
<form action="Addmember" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter Your Name"><br><br>
    <input type="password" name="password" placeholder="Enter Your password"><br><br>
    <input type="email" name="email" placeholder="Enter Your email"><br><br>
    <button type="submit">Add Member</button>
</form>

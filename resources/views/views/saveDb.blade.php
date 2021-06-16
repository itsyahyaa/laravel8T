<h1>Save Data to Database</h1>
<form action="savedb" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name"><br><br>
    <input type="email" name="email" placeholder="Enter Your Email"><br><br>
    <input type="text" name="address" placeholder="Enter Your Address"><br><br>
    <button type="submit">Add member</button>
</form>

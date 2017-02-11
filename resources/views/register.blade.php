<form method="post">
    <input  type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email Address">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="cpassword" placeholder="Confirm Password">
    <input type="submit" name="submit">
    {{ csrf_field() }}
</form>
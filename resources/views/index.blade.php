<h1>hello</h1>

<form method="post">
    <input type="text" name="name">
    <input type="submit" value="send">
    {{ csrf_field() }}
</form>
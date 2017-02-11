@if (isset($viewData->message))
    {{$viewData->message}}
@endif
<form method="post">
    <input type="email" name="email" placeholder="Email Address">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit">
    {{ csrf_field() }}
</form>
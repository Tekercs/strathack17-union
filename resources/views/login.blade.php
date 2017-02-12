@extends('wrapper')

@section('content')
@if (isset($viewData->message))
    {{$viewData->message}}
@endif
<h2>Login</h2>
<form method="post">
    Email:<br>
    <input type="text" id="textbox" name="email" placeholder="Strathhacker@please.fixourcode.com"><br>
    Password:<br>
    <input type="password" id="textbox" name="password" placeholder="***********"><br><br>
    <input type="submit" value="Submit">
    {{ csrf_field() }}
    <br><br><br>
    Not got an account?
    Sign up <a href="register"> here </a>
</form>
    @endsection

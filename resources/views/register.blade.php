@extends('wrapper')

@section('content')
    @if (isset($viewData->message))
        {{$viewData->message}}
    @endif
    <form method="post">
        Name:<br>
        <input type="text" id="textbox" name="name" placeholder="abc123"><br>
        Email:<br>
        <input type="text" id="textbox" name="email" placeholder="Strathhack2017@fixourcode.com"><br>
        Password:<br>
        <input type="text" id="textbox" name="password" placeholder="**********"><br>
        Retype password:<br>
        <input type="text" id="textbox" name="cpassword" placeholder="**********"><br>
        {{ csrf_field() }}
        <input type="submit" value="Submit">

    </form>
    @endsection

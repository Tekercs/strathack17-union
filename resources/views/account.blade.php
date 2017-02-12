@extends('wrapper')

@section('content')
    @if (isset($viewData->message))
        {{$viewData->message}}
    @endif
    <form method="post">
        Name:<br>
        <input type="text" id="textbox" name="name" placeholder="Name" disabled value="{{$user->name}}"></br>
        Email:<br>
        <input type="email" id="textbox" name="email" placeholder="Email" value="{{$user->email}}"></br>
        New Password:<br>
        <input type="password" id="textbox" name="password" placeholder="Leave blank for no change"></br>
        Confirm Password:<br> <input type="password" id="textbox" name="cpassword" placeholder=""></br>
        {{ csrf_field() }}
<input type="submit" value="send">
    </form>
@endsection

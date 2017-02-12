@extends('wrapper')

@section('content')
    @if (isset($viewData->message))
        {{$viewData->message}}
    @endif
    <h2>Submit an Ad</h2>
    <form method="post" id="submitanad">
        Title:<br>
        <input type="text" id="textbox" name="title" maxlength="80" placeholder="abc123"><br>
        Category:<br>
        <select name="category">
            @foreach($viewData->categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select></br>
        Price (optional):<br>
        <input type="text" id="textbox" name="price" placeholder="£156"><br>
        Brief (Leave blank for automatic):<br>
        <textarea name="brief" maxlength="200" form="submitanad" placeholder="A brief description of your ad..."></textarea></br>
        Description:<br>
        <textarea name="desc" form="submitanad" placeholder="Full description of your advert"></textarea></br>

        {{ csrf_field() }}
        <input type="submit" value="Submit">

    </form>
@endsection

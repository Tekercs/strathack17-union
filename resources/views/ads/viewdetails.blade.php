@extends('wrapper')

@section('content')
    <section class="last">
        <h2>{{$viewData->ad->title}}</h2>
        <i>{{$viewData->ad->created_at}}</i>

        <p class="bold">{{$viewData->ad->breef}}</p>

        <p>{{$viewData->ad->content}}<p>

    </section>
@endsection
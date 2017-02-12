@extends('wrapper')

@section('tiles')

    <div id="features-wrapper">
        <div class="container">
            <div class="row">
                @foreach($viewData->ads as $ad)
                    <div class="4u 12u(medium)">
                        <section class="box feature">
                            <a href="/ads/{{$ad->id}}" class="image featured"><img src="/images/pic01.jpg" alt="" /></a>
                            <div class="inner">
                                <header>
                                    <h2><a href="/ads/{{$ad->id}}">{{$ad->title}}</a></h2>
                                    <p>{{$ad->category->name}}</p>
                                </header>
                                <p>{{$ad->breef}}</p>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
            <a class="prev-link" href="/ads/list/{{$viewData->prevPage}}}">previous</a>
            <a class="next-link" href="/ads/list/{{$viewData->nextPage}}}">next</a>
        </div>
    </div>

@endsection
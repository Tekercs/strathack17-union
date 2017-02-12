@extends('wrapper')

@section('content')



    <section class="last">

        <div class="container">
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    @for($i = 1; $i < count(explode(";", $viewData->ad->pictureList)); $i++)
                        <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
                    @endfor
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="/images/{{explode(";", $viewData->ad->pictureList)[0]}}" alt="Chania" width="460" height="345">
                    </div>

                    @for($i = 1, $pictures = explode(";", $viewData->ad->pictureList); $i < count($pictures); $i++)
                    <div class="item">
                        <img src="/images/{{$pictures[$i]}}" width="460" height="345">
                    </div>
                    @endfor


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control no-background" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control no-background" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <h2>{{$viewData->ad->title}}</h2>
        <i>{{$viewData->ad->created_at}}</i>

        <p class="bold">{{$viewData->ad->breef}}</p>

        <p>{{$viewData->ad->content}}<p>

    </section>
@endsection
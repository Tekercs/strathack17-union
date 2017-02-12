@extends('wrapper')

@section('content')



    <section class="last">

        <div class="container">
            <br>
            <div id = "myCarousel" class = "carousel slide" data-ride="carousel">
                <ol class = "carousel-indicators slide">
                    <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
                    <li data-target = "#myCarousel" data-slide-to = "1"></li>
                    <li data-target = "#myCarousel" data-slide-to = "2"></li>
                </ol>

                <div class = "carousel-inner" role="listbox">
                    <div class = "item active">
                        <img src = "img/image1.jpg" alt = "Image1" class = "img-responsive">
                        <div class = "carousel-caption">
                            <h3>"Image 1"</h3>
                        </div>

                        <div class = "item">
                            <img src = "img/image2.jpg" alt = "Image2" class = "img-responsive">
                            <div class = "carousel-caption">
                                <h3>"Image 2"</h3>
                            </div>

                            <div class = "item">
                                <img src = "img/image3.jpg" alt = "Image3" class = "img-responsive">
                                <div class = "carousel-caption">
                                    <h3>"Image 3"</h3>
                                </div>

                                <a class = "carousel-control left" href="#myCarousel" data-slide = "prev">
                                    <span class = "icon-prev"></span>
                                </a>

                                <a class = "carousel-control right" href="#myCarousel" data-slide = "next">
                                    <span class = "icon-next"></span>
                                </a>

                            </div>

                        </div>

        <h2>{{$viewData->ad->title}}</h2>
        <i>{{$viewData->ad->created_at}}</i>

        <p class="bold">{{$viewData->ad->breef}}</p>

        <p>{{$viewData->ad->content}}<p>

    </section>
@endsection
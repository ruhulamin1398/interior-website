@extends('frontend.include.app')

@section('pageTitle')
<title>Home - Karigor Interior BD</title>
@endsection


@section('frontend')


<!-- hero section start -->





<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        @php
        $slide_item_01 = App\Models\MediaContent::find(1)->media;
        @endphp
        <div class="carousel-item carousel-item1 active"
            style="background: -o-linear-gradient(45deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.7)), url('{{ asset('images/'.$slide_item_01) }}');
        background: linear-gradient(45deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.7)), url('{{ asset('images/'.$slide_item_01) }}');
        background-repeat: no-repeat;
background-size: cover;
">

            <div class="carousel-caption d-block">
                <h5 class="animate__animated animate__fadeInDown"
                    style="animation-duration: 1.7s; animation-delay: 0.6s">We Create Spaces for better living</h5>
                <p class="animate__animated animate__fadeInDown"
                    style="animation-duration: 1.7s; animation-delay: 1.7s">
                    <a href="about.html">Learn More</a>
                </p>
            </div>
        </div>

        @php
        $slide_item_02 = App\Models\MediaContent::find(2)->media;
        @endphp
        <div class="carousel-item carousel-item2"
            style="background: -o-linear-gradient(45deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.7)), url('{{ asset('images/'.$slide_item_02) }}');
        background: linear-gradient(45deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.7)), url('{{ asset('images/'.$slide_item_02) }}');
        background-repeat: no-repeat;
background-size: cover;
">

            <div class="carousel-caption d-block">
                <h5 class="animate__animated animate__fadeInDown"
                    style="animation-duration: 1.7s; animation-delay: 0.6s">Inspiring world with innovative space
                    design</h5>
                <p class="animate__animated animate__fadeInDown"
                    style="animation-duration: 1.7s; animation-delay: 1.7s">
                    <a href="#">Learn More</a>
                </p>
            </div>
        </div>

        @php
        $slide_item_03 = App\Models\MediaContent::find(3)->media;
        @endphp
        <div class="carousel-item carousel-item3"
            style="background: -o-linear-gradient(45deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.7)), url('{{ asset('images/'.$slide_item_03) }}');
        background: linear-gradient(45deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.7)), url('{{ asset('images/'.$slide_item_03) }}');
        background-repeat: no-repeat;
background-size: cover;">

            <div class="carousel-caption d-block">
                <h5 class="animate__animated animate__fadeInDown"
                    style="animation-duration: 1.7s; animation-delay: 0.6s">Giving your home a modern and unique
                    style</h5>
                <p class="animate__animated animate__fadeInDown"
                    style="animation-duration: 1.7s; animation-delay: 1.7s">
                    <a href="#">Learn More</a>
                </p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon control-button" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon control-button" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- hero section end -->

<!-- services section start -->
<div id="services">
    <div class="section-title pt-5">
        <h1 class="text-center"><span>Our</span> Services</h1>
        <p class="text-center">What we do</p>
    </div>

    <div class="container-lg pt-4 pb-5 d-flex flex-wrap justify-content-center justify-content-lg-start"
        data-aos="fade-up" data-aos-duration="700" style="display:none !important;">
        <div class="card mb-5 ms-2 me-2 flex-grow-1 ">

            <img loading="lazy" src="{{asset('theme/frontend/img/service-01.jpg')}}" alt="">


            <div class="card-text-content service-area">
                <a href="{{route('front-interior')}}">
                    <p>Interior</p>
                </a>
            </div>
        </div>


        <div class="card mb-5 ms-2 me-2 flex-grow-1">
            <img loading="lazy" src="{{asset('theme/frontend/img/service-02.jpg')}}" alt="">

            <div class="card-text-content service-area">

                <a href="{{route('front-cons')}}">
                    <p>Construction</p>
                </a>
            </div>
        </div>

    </div>
</div>
<!-- services section end -->


<!-- service row start (construction) -->
<div id="construction" class="container-lg pt-md-4 pb-md-5" data-aos="fade-up" data-aos-duration="700">
    <div class="service-row construction-content pt-4 pb-4">
        <div class="service-row-img">
            @php
            $service_01_img = App\Models\MediaContent::find(4)->media;
            @endphp
            <img loading="lazy" src="{{ asset('images/'.$service_01_img) }}" alt="">
        </div>

        <div class="service-row-text construction-text">
            <h2>Construction</h2>

            <p>
                {{ App\Models\TextContent::find(1)->text; }}

            </p>
            <p class="learn-more-btn"><a href="{{route('front-cons')}}">Learn more</a></p>
        </div>
    </div>
</div>
<!-- service row end -->



<!-- service row start (interior) -->
<div id="interior" class="container-lg pt-md-4 mb-md-5 pb-md-5" data-aos="fade-up" data-aos-duration="700">
    <div class="service-row interior-content pt-4 pb-4">
        <div class="service-row-img">
            @php
            $service_02_img = App\Models\MediaContent::find(5)->media;
            @endphp
            <img loading="lazy" src="{{ asset('images/'.$service_02_img) }}" alt="">
        </div>

        <div class="service-row-text interior-text">
            <h2>Interiors</h2>
            <p> {{ App\Models\TextContent::find(2)->text; }}</p>
            <p class="learn-more-btn"><a href="{{route('front-interior')}}">Learn more</a></p>
        </div>
    </div>
</div>
<!-- service row end -->




<!-- Video -->


<section id="core-values-section mb-md-5  mt-md-5">

    <div class="container">
        <div class="section-title mb-md-5 pb-md-4">
            <h1> Project<span> Video</span></h1>
        </div>
        <div class="row " data-aos="fade-up">
            <div class="card-group">
                @foreach ($Videos as $video)
                <div class="col-md-4  mb-md-4 core-values pe-3">
                    <div class="card w-100  ">
                        <div class="card-body p-0">
                            <div width="100%" height="100%">
                                {!!
                                \SOS\LaravelYoutubeFrameGenerator\Facades\YFrameFacade::width('100%')
                                ->height('300px')
                                ->isFullscreen(true)
                                ->generate($video->link)!!}
                            </div>

                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>


<!-- Vodeo end -->




<!-- exclusive project gallery start -->
<div class="container-xxl gallery pt-md-5 mt-md-5" id="project-gallery">
    <div class="section-title">
        <h1>Exclusive<span> Projects</span></h1>
    </div>

    <div class="wrapper">
        <ul class="filter-menu" data-aos="fade-up" data-aos-duration="500">
            <li data-list="allproject" class="active-menu">All</li>
            <li data-list="interior-home">Interior</li>
            <li data-list="construction">Construction</li>

        </ul>


        <div class="filter-items" data-aos="fade-up" data-aos-duration="700">


            @foreach($allProjectsList as $project)

            <div class="filter-content " data-item="allproject" data-projectID="{{$project->id}}">

                <img loading="lazy" @if ($project->images->first())
                src="/project/picture/{{$project->images->first()->image}}"
                @else
                src="/project/picture/image-notFound.jpg"
                @endif alt="">

                <p class="hover-text ">{{$project->short_description}} </p>
                <div class="project-title-area">
                    <p class="project-title">{{$project->title}}</p>
                    <p class="project-status">
                        @if ($project->status ==0 )

                        <span class="text-warning">Upcoming</span>
                        @elseif ($project->status == 1 )

                        <span class="text-primary">Ongoing</span>
                        @elseif ($project->status == 2 )
                        <span class="text-success">Completed </span>
                        @endif


                    </p>
                </div>

            </div>

            @endforeach


            @foreach($interiorProjects as $project)

            <div class="filter-content" data-item="interior-home" data-projectID="{{$project->id}}">

                <img loading="lazy" @if ($project->images->first())
                src="/project/picture/{{$project->images->first()->image}}"
                @else
                src="/project/picture/image-notFound.jpg"
                @endif alt="">
                <p class="hover-text "> {{$project->short_description}} </p>
                <div class="project-title-area">
                    <p class="project-title">{{$project->title}}</p>
                    <p class="project-status">
                        @if ($project->status ==0 )

                        <span class="text-warning">Upcoming</span>
                        @elseif ($project->status == 1 )

                        <span class="text-primary">Ongoing</span>
                        @elseif ($project->status == 2 )
                        <span class="text-success">Completed </span>
                        @endif
                    </p>
                </div>

            </div>

            @endforeach


            @foreach($constructionProjects as $project)
            <div class="filter-content" data-item="construction" data-projectID="{{$project->id}}">

                <img loading="lazy" @if ($project->images->first())
                src="/project/picture/{{$project->images->first()->image}}"
                @else
                src="/project/picture/image-notFound.jpg"
                @endif alt="">

                <p class="hover-text">{{$project->short_description}}</p>
                <div class="project-title-area">
                    <p class="project-title">{{$project->title}}</p>
                    <p class="project-status">

                        @if ($project->status ==0 )

                        <span class="text-warning">Upcoming</span>
                        @elseif ($project->status == 1 )

                        <span class="text-primary">Ongoing</span>
                        @elseif ($project->status == 2 )
                        <span class="text-success">Completed </span>
                        @endif

                    </p>
                </div>
            </div>

            @endforeach






        </div>
    </div>
</div>
<!-- exclusive project gallery end -->
@endsection
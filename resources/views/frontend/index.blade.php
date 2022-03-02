@extends('frontend.include.app')

@section('pageTitle')
<title>Home - Karigor Interior BD</title>
@endsection


@section('frontend')


<!-- hero section start -->





<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item carousel-item1 active">

            <div class="carousel-caption d-block">
                <h5 class="animate__animated animate__fadeInDown" style="animation-duration: 1.7s; animation-delay: 0.6s">We Create Spaces for better living</h5>
                <p class="animate__animated animate__fadeInDown" style="animation-duration: 1.7s; animation-delay: 1.7s">
                    <a href="about.html">Learn More</a>
                </p>
            </div>
        </div>

        <div class="carousel-item carousel-item2">

            <div class="carousel-caption d-block">
                <h5 class="animate__animated animate__fadeInDown" style="animation-duration: 1.7s; animation-delay: 0.6s">Inspiring world with innovative space
                    design</h5>
                <p class="animate__animated animate__fadeInDown" style="animation-duration: 1.7s; animation-delay: 1.7s">
                    <a href="#">Learn More</a>
                </p>
            </div>
        </div>

        <div class="carousel-item carousel-item3">

            <div class="carousel-caption d-block">
                <h5 class="animate__animated animate__fadeInDown" style="animation-duration: 1.7s; animation-delay: 0.6s">Giving your home a modern and unique
                    style</h5>
                <p class="animate__animated animate__fadeInDown" style="animation-duration: 1.7s; animation-delay: 1.7s">
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

    <div class="container-lg pt-4 pb-5 d-flex flex-wrap justify-content-center justify-content-lg-start" data-aos="fade-up" data-aos-duration="700">
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
<div id="construction" class="container-lg pt-4 pb-5" data-aos="fade-up" data-aos-duration="700">
    <div class="service-row construction-content pt-4 pb-4">
        <div class="service-row-img">
            <img loading="lazy" src="{{asset('theme/frontend/img/construction.jpg')}}" alt="">
        </div>

        <div class="service-row-text construction-text">
            <h2>Construction</h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos suscipit repellendus ipsa libero totam
                quod est cumque nobis architecto fugiat nesciunt ducimus eius Quidem sit commodi nemo quaerat magnam
                nostrum voluptatibus fugiat reiciendis ratione pariatur totam voluptatem minima sapiente harum.</p>
            <p class="learn-more-btn"><a href="{{route('front-cons')}}">Learn more</a></p>
        </div>
    </div>
</div>
<!-- service row end -->



<!-- service row start (interior) -->
<div id="interior" class="container-lg pt-4 mb-5 pb-5" data-aos="fade-up" data-aos-duration="700">
    <div class="service-row interior-content pt-4 pb-4">
        <div class="service-row-img">
            <img loading="lazy" src="{{asset('theme/frontend/img/interior.jpg')}}" alt="">
        </div>

        <div class="service-row-text interior-text">
            <h2>Interiors</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos suscipit repellendus ipsa libero totam
                quod est cumque nobis architecto fugiat nesciunt ducimus eius Quidem sit commodi nemo quaerat magnam
                nostrum voluptatibus fugiat reiciendis ratione pariatur totam voluptatem minima sapiente harum.</p>
            <p class="learn-more-btn"><a href="{{route('front-interior')}}">Learn more</a></p>
        </div>
    </div>
</div>
<!-- service row end -->




<!-- Core values start -->


<section id="core-values-section mb-5  mt-5">

    <div class="container">
        <div class="section-title mb-5 pb-4">
            <h1>Our<span> Core Values</span></h1>
        </div>




        <div class="row " data-aos="fade-up">
            <div class="card-group">
                <div class="col-md-4 mb-4 core-values  p-2">
                    <div class="card w-100  pt-4 ps-2">
                        <div class="card-body">
                            <h3 class="mb-5 fw-bold card-title"><span>P</span>EOPLE<h3>
                                    <p class="card-text">We conduct our business to the highest ethical standards and take responsibility for our actions.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4  mb-4 core-values p-2">
                    <div class="card w-100  pt-4 ps-2">
                        <div class="card-body">
                            <h3 class="mb-5 fw-bold card-title"><span>I</span>NTEGRITY<h3>
                                    <p class="card-text">We care for the well-being of our people and help them grow in their ability to be successful.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-4 core-values p-2">
                    <div class="card w-100  pt-4 ps-2">
                        <div class="card-body">
                            <h3 class="mb-5 fw-bold card-title"><span>E</span>XCELLENCE<h3>
                                    <p class="card-text">We commit to excellence in all we do with a focus on quality and continuous improvement.</p>
                        </div>

                    </div>
                </div>
            </div>





        </div>


</section>


<!-- core values end -->




<!-- exclusive project gallery start -->
<div class="container-xxl gallery pt-5 mt-5" id="project-gallery">
    <div class="section-title">
        <h1>Exclusive<span> Projects</span></h1>
    </div>

    <div class="wrapper">
        <ul class="filter-menu" data-aos="fade-up" data-aos-duration="500">
            <li data-list="interior" class="active-menu">Interior</li>
            <li data-list="construction">Construction</li>
            <li data-list="allproject">All</li>
        </ul>


        <div class="filter-items" data-aos="fade-up" data-aos-duration="700">


            @foreach($allProjectsList as $project)

            <div class="filter-content " data-item="allproject" data-projectID="{{$project->id}}">

                <img loading="lazy" src="/project/picture/{{$project->images->first()->image}}" alt="">
                <p class="hover-text ">{{$project->short_description}} </p>
                <div class="project-title-area">
                    <p class="project-title">{{$project->title}}</p>
                    <p class="project-status">
                        @if ($project->status ==0 )

                        <span class="text-warning">Upcoming</span>
                        @elseif ($project->status == 1 )

                        <span class="text-primary">Ongoing</span>
                        @elseif ($project->status == 2 )
                        <span class="text-success">Delivered </span>
                        @endif


                    </p>
                </div>

            </div>

            @endforeach


            @foreach($interiorProjects as $project)

            <div class="filter-content" data-item="interior" data-projectID="{{$project->id}}">

                <img loading="lazy" src="/project/picture/{{$project->images->first()->image}}" alt="">
                <p class="hover-text "> {{$project->short_description}} </p>
                <div class="project-title-area">
                    <p class="project-title">{{$project->title}}</p>
                    <p class="project-status">
                        @if ($project->status ==0 )

                        <span class="text-warning">Upcoming</span>
                        @elseif ($project->status == 1 )

                        <span class="text-primary">Ongoing</span>
                        @elseif ($project->status == 2 )
                        <span class="text-success">Delivered </span>
                        @endif
                    </p>
                </div>

            </div>

            @endforeach


            @foreach($constructionProjects as $project)
            <div class="filter-content" data-item="construction" data-projectID="{{$project->id}}">

                <img loading="lazy" src="/project/picture/{{$project->images->first()->image}}" alt="">

                <p class="hover-text">{{$project->short_description}}</p>
                <div class="project-title-area">
                    <p class="project-title">{{$project->title}}</p>
                    <p class="project-status">

                        @if ($project->status ==0 )

                        <span class="text-warning">Upcoming</span>
                        @elseif ($project->status == 1 )

                        <span class="text-primary">Ongoing</span>
                        @elseif ($project->status == 2 )
                        <span class="text-success">Delivered </span>
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
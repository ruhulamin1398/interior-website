@extends('frontend.include.app')

@section('pageTitle')
<title>Construction Services - Karigor Interior BD</title>
@endsection

@section('frontend')


<!-- breadcrumb start -->
<div class="container-fluid breadcrumb-area parallax">
    <div class="container-lg">
        <div class="title">
            <h2>Our Services</h2>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home-index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('front-interior')}}">Our Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Construction</li>
            </ol>
        </nav>
    </div>
</div>
<!-- breadcrumb end -->



<!-- services section start -->
<div id="services" class="construction-services">
    <div class="section-title pt-5">
        <h1 class="text-center"><span>Construction</span> Services</h1>
        <p class="text-center">What we do</p>
    </div>

    <div class="container-lg pt-4 pb-5 d-flex flex-wrap justify-content-center justify-content-lg-start" data-aos="fade-up">

        @foreach($constructionSerivce as $service)
        <div class="card mb-3 ms-2 me-2 flex-grow-1">
            <img loading="lazy" src="/construction/picture/{{$service->image}}" alt="">

            <div class="card-text-content">
                <p>{{$service->title}}</p>
            </div>
        </div>
        @endforeach

    </div>
</div>
<!-- services section end -->



<!-- service gallery start -->
<div class="container-fluid service-gallery mt-2">
    <div class="section-title pt-5 pb-5">
        <h1>Best Construction <span>Projects</span></h1>
    </div>

    <div class="service-gallery-wrapper mt-4">

        @foreach($constructionProjects as $project)
        <div class="service-gallery-content">
            <img loading="lazy" src="/project/picture/{{$project->images->first()->image}}" alt="">
            <a href="{{ url('project/gallery/'.$project->id) }}" class="text-white">
                <div class="preview-details">
                    <p class="preview-title">{{$project->title}}</p>
                </div>
            </a>

            <div class="service-project-title-area">
                <p class="service-project-title">{{$project->title}}</p>
                <p class="service-project-status">

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
<!-- service gallery end -->

@endsection
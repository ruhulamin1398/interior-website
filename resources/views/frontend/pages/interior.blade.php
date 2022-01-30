@extends('frontend.include.app')
@section('frontend')



<!-- breadcrumb start -->
<div class="container-fluid breadcrumb-area">
    <div class="container-lg">
        <div class="title">
            <h2>Our Services</h2>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home-index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('front-cons')}}">Our Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Interior</li>
            </ol>
        </nav>
    </div>
</div>
<!-- breadcrumb end -->



<!-- services section start -->
<div id="services" class="interior-services">
    <div class="section-title pt-5">
        <h1 class="text-center"><span>Interior </span> Services</h1>
        <p class="text-center">What we do</p>
    </div>

    <div class="container-xl pt-4 pb-5 d-flex flex-wrap justify-content-center justify-content-lg-start" data-aos="fade-up">

        @foreach($interiorSerivce as $service)
        <div class="card mb-3 ms-2 me-2 flex-grow-1">
            <img loading="lazy" src="/interior/picture/{{$service->image}}" alt="">

            <div class="card-text-content">
                <p>{{$service->title}}</p>
            </div>
        </div>
        @endforeach



    </div>
</div>
<!-- services section end -->




<!-- service gallery start -->
<div class="container-fluid service-gallery">
    <div class="section-title pt-5 pb-5">
        <h1>Best Interior <span>Designs</span></h1>
    </div>

    <div class="service-gallery-wrapper mt-4">
        @foreach($interiorProjects as $project)

        <div class="service-gallery-content">
            <img loading="lazy" src="/project/picture/{{$project->images->first()->image}}" alt="">
           
            <div class="preview-details">
            <a href="{{ url('project/gallery/'.$project->id) }}" class="text-white">
                <p class="preview-title">{{$project->title}}</p>
                </a>
            </div>
            <div class="service-project-title-area">
                <p class="service-project-title">{{$project->title}}</p>
                <p class="service-project-status">Status</p>
            </div>
           
        </div>

        @endforeach

    </div>

</div>
<!-- service gallery end -->

@endsection
@extends('frontend.include.app')
@section('frontend')

@section('pageTitle')
<title>Karigor Interior BD - Our Clients</title>
@endsection

<!-- breadcrumb start -->
<div class="container-fluid breadcrumb-area">
    <div class="container-lg">
        <div class="title">
            <h2>Our Brands</h2>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home-index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('front-cons')}}">Our Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clients</li>
            </ol>
        </nav>
    </div>
</div>
<!-- breadcrumb end -->



<!-- services section start -->
<div id="services" class="interior-services">
    <div class="section-title pt-5">
        <h1 class="text-center"><span>Our </span> Clients</h1>
        <p class="text-center"></p>
    </div>

    <div class="container-xl pt-4 pb-5 d-flex flex-wrap justify-content-center justify-content-lg-start" data-aos="fade-up">

        @foreach($brandImages as $image)
        <div class=" m-5 mb-3 ms-2 me-2 flex-grow-1 brandfilter ">
            <img  src="/brand/picture/{{$image->image}}" height="150px" width="230px"  alt="">

            
        </div>
        @endforeach



    </div>
</div>
<!-- services section end -->

@endsection
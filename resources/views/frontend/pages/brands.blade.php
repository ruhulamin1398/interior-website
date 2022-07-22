@extends('frontend.include.app')
@section('frontend')

@section('pageTitle')
<title>Our Clients - Karigor Interior BD</title>
@endsection

<!-- breadcrumb start -->
<div class="container-fluid breadcrumb-area">
    <div class="container-lg">
        <div class="title">
            <h2>Our Clients</h2>
        </div>
<!-- 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home-index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('front-cons')}}">Our Services</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clients</li>
            </ol>
        </nav> -->
    </div>
</div>
<!-- breadcrumb end -->



<!-- services section start -->
<div  class="interior-services">
    <div class="section-title pt-5">
        <h1 class="text-center"><span>Our </span> Clients</h1>
        <p class="text-center"></p>
    </div>

    <div class="container d-flex flex-wrap  justify-content-md-center" data-aos="fade-up">

        @foreach($brandImages as $image)
        <div class="col-lg-3 p-4 client-image" >
            <img  src="/brand/picture/{{$image->image}}" height="200px" width="230px"  alt="" class="mt-5">

            
        </div>
        @endforeach



    </div>
</div>
<!-- services section end -->

@endsection
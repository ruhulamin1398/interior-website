@extends('frontend.include.app')

@section('pageTitle')
<title>Karigor Interior BD - Project Gallery</title>
@endsection

@section('frontend')

    <!-- breadcrumb start -->
    <div class="container-fluid breadcrumb-area">
        <div class="container-lg">
            <div class="title">
                <h2>Project Gallery</h2>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home-index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('front-interior')}}">Our Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb end -->



    <!-- project gallery start -->
    <div class="container-lg gallery">
        <div class="wrapper">


            <div class="filter-items project-gallery" data-aos="fade-up">

                @foreach($projectImages as $image)

                <div class="filter-content" data-item="interior">
                    <img loading="lazy" src="/project/picture/{{$image->image}}"   alt="">
                    <p class="hover-text"><span class="icon-plus"></span></p>
                </div>
                @endforeach

            </div>
        </div>

        <!-- lightbox -->
        <div class="lightbox project-lightbox">
            <div class="lightbox-content">
                <div class="lightbox-header">
                   
                    <div class="lightbox-close-btn">
                        <span id="close-lightbox"></span>
                    </div>
                </div>

                <div class="image-wrapper">
                    <img loading="lazy" src="img/ill1.jpg" alt="project preview">
                </div>
            </div>

            <div class="lightbox-arrow">
                <span class="icon-angle-left" id="left-arrow"></span>
                <span class="icon-angle-right" id="right-arrow"></span>
            </div>
        </div>

        <!-- lightbox shadow -->
        <div class="lightbox-shadow"></div>
    </div>
    <!-- project gallery end -->

@endsection
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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
      
        <div class="container-xl pt-4 pb-5 d-flex flex-wrap justify-content-center justify-content-lg-start"
            data-aos="fade-up">
            <div class="card mb-3 ms-2 me-2 flex-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/interior_gallery/residential_01.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>Residential</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/interior_gallery/residential_02.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>Commercial</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/interior_gallery/commercial_01.jpeg')}}" alt="">

                <div class="card-text-content">
                    <p>Instutution</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/interior_gallery/commercial_02.jpeg')}}" alt="">

                <div class="card-text-content">
                    <p>Office</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-grow-1">
                <img loading="lazy" src="   {{asset('theme/frontend/img/interior_gallery/institution_01.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>Resort</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-grow-1">
                <img loading="lazy" src="   {{asset('theme/frontend/img/interior_gallery/institution_02.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>Hotel</p>
                </div>
            </div>

        </div>
    </div>
    <!-- services section end -->




    <!-- service gallery start -->
    <div class="container-fluid service-gallery">
        <div class="section-title pt-5 pb-5">
            <h1>Best Interior <span>Designs</span></h1>
        </div>

        <div class="service-gallery-wrapper mt-4">
            <div class="service-gallery-content">
                <img loading="lazy" src="   {{asset('theme/frontend/img/exclusive_gallery/01.jpeg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="   {{asset('theme/frontend/img/exclusive_gallery/02.jpeg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="   {{asset('theme/frontend/img/exclusive_gallery/03.jpeg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="   {{asset('theme/frontend/img/exclusive_gallery/04.jpeg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="   {{asset('theme/frontend/img/exclusive_gallery/05.jpg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="   {{asset('theme/frontend/img/exclusive_gallery/06.jpeg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>
        </div>
    </div>
    <!-- service gallery end -->

@endsection
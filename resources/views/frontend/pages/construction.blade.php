@extends('frontend.include.app')
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

        <div class="container-lg pt-4 pb-5 d-flex flex-wrap justify-content-center justify-content-lg-start"
            data-aos="fade-up">
            <div class="card mb-3 ms-2 me-2 flex-lg-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/construction_gallery/01.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>Soil test</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-lg-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/construction_gallery/02.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>Floor plan</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-lg-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/construction_gallery/03.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>3d of the project</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-lg-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/construction_gallery/04.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>Structural design</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-lg-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/construction_gallery/05.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>Landscaping</p>
                </div>
            </div>

            <div class="card mb-3 ms-2 me-2 flex-lg-grow-1">
                <img loading="lazy" src="{{asset('theme/frontend/img/construction_gallery/06.jpg')}}" alt="">

                <div class="card-text-content">
                    <p>Total construction</p>
                </div>
            </div>

        </div>
    </div>
    <!-- services section end -->



    <!-- service gallery start -->
    <div class="container-fluid service-gallery mt-2">
        <div class="section-title pt-5 pb-5">
            <h1>Best Construction <span>Projects</span></h1>
        </div>

        <div class="service-gallery-wrapper mt-4">
            <div class="service-gallery-content">
                <img loading="lazy" src="{{asset('theme/frontend/img/exclusive_gallery/10.jpg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="{{asset('theme/frontend/img/exclusive_gallery/11.jpg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="{{asset('theme/frontend/img/exclusive_gallery/12.jpg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="{{asset('theme/frontend/img/exclusive_gallery/07.jpg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="{{asset('theme/frontend/img/exclusive_gallery/08.jpg')}}" alt="">

                <div class="preview-details">
                    <p class="preview-title">Project Preview Title</p>
                </div>

                <div class="service-project-title-area">
                    <p class="service-project-title">Construction Project Title</p>
                    <p class="service-project-status">Status</p>
                </div>
            </div>

            <div class="service-gallery-content">
                <img loading="lazy" src="{{asset('theme/frontend/img/exclusive_gallery/09.jpg')}}" alt="">

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
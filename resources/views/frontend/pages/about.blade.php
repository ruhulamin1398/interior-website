@extends('frontend.include.app')

@section('pageTitle')
<title>About Us - Karigor Interior BD</title>
@endsection

@section('frontend')
<!-- breadcrumb start -->
<div class="container-fluid breadcrumb-area">
    <div class="container-lg">
        <div class="title">
            <h2>About Us</h2>
        </div>

    </div>
</div>
<!-- breadcrumb end -->



<!-- about section start -->


<section id="about-us" class="container">

    <!-- <div class="about-us-title text-center">
            <h1 class="fw-bold">About Us</h1>
        </div> -->

    <div class="row mt-md-5  p-2">
        <div class="col-md-6">
            @php
            $about_description = App\Models\mediaContent::find(6)->media;
            @endphp
            <img loading="lazy" class="about-us-img shadow" src="{{ asset('images/'.$about_description) }}" alt=""
                height="400" width="650">
        </div>
        <div class="col-md-6 ">
            <p class="pt-3 about-us-text">
                @php
                echo App\Models\textContent::find(9)->text;
                @endphp
            </p>
        </div>
    </div>

</section>


<section id="why-choose-section">

    <div class="container pt-5">
        <div class="section-title why-choose-title text-center">
            <h1>Why Choose<span> Karigor</span></h1>
        </div>


        <div class="row mt-5">
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="fas fa-building why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">{{ App\Models\textContent::find(10)->title; }}</h4>
                    <p>{{ App\Models\textContent::find(10)->text; }}</p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="far fa-lightbulb why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">{{ App\Models\textContent::find(11)->title; }}
                    </h4>
                    <p>{{ App\Models\textContent::find(11)->text; }}

                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="fas fa-tools why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">{{ App\Models\textContent::find(12)->title; }}
                    </h4>
                    <p>{{ App\Models\textContent::find(12)->text; }}

                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="fas fa-trophy why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">{{ App\Models\textContent::find(13)->title; }}
                    </h4>
                    <p>{{ App\Models\textContent::find(13)->text; }}

                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="far fa-file-alt why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">{{ App\Models\textContent::find(14)->title; }}
                    </h4>
                    <p>{{ App\Models\textContent::find(14)->text; }}

                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="far fa-clock why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">{{ App\Models\textContent::find(15)->title; }}
                    </h4>
                    <p>{{ App\Models\textContent::find(15)->text; }}

                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="container pt-5">
        <div class="about-imagine  text-center ">
            <h1>Get The<span> Imagine Interiors</span> Advantage</h1>
        </div>

        <div class="row mt-1 mb-5 justify-content-center m-3 ">
            <div class=" imagine-card   col-lg-3 d-flex align-items-center  ">
                <i class="fa fa-user imagine-icon me-3"></i>
                <div>
                    <h5>{{ App\Models\textContent::find(16)->title; }}</h5>
                    <p>{{ App\Models\textContent::find(16)->text; }}</p>
                </div>
            </div>

            <div class=" imagine-card  col-lg-3 d-flex align-items-center  ">
                <i class="fa fa-cog imagine-icon me-3"></i>
                <div>
                    <h5>{{ App\Models\textContent::find(17)->title; }}</h5>
                    <p>{{ App\Models\textContent::find(17)->text; }}</p>
                </div>
            </div>

            <div class=" imagine-card col-lg-3  d-flex align-items-center ">
                <i class="fa fa-clock-o imagine-icon me-3"></i>
                <div>
                    <h5>{{ App\Models\textContent::find(18)->title; }}</h5>
                    <p>{{ App\Models\textContent::find(18)->text; }}</p>
                </div>
            </div>

        </div>
    </div>

</section>

@endsection
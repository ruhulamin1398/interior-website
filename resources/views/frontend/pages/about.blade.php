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

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home-index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
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
            <img loading="lazy" class="about-us-img shadow" src="{{asset('theme/frontend/img/interior_gallery/institution_01.jpg')}}" alt="" height="400" width="650">
        </div>
        <div class="col-md-6 ">
            <p class="pt-3 about-us-text">We shape our homes, and then, our homes shape us – Winston Churchill
                <br>
                <br>

                For the KariGhars team, every detail in design must have a purpose, must reflect your personality and must be beautiful. For years, we have transformed ordinary houses into warm, luxurious homes by planning efficient layouts, using uplifting color palettes, bespoke furniture and strategic lighting schemes. <br> <br>
                Our team of designers and craftsmen combine their vision and aesthetic values with high-quality materials. We don’t just create spaces that look good, we create functional spaces that have a positive impact on your wellbeing
            </p>
        </div>
    </div>

</section>


<section id="why-choose-section">

    <div class="container pt-5">
        <div class="section-title why-choose-title text-center">
            <h1>Why Choose<span> Karighor</span></h1>
        </div>


        <div class="row mt-5">
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="fas fa-building why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">41 Years Of Experince</h4>
                    <p>We brings 41 years of interior designs experience office,hospital and etc...</p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="far fa-lightbulb why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">Creative Designers
                    </h4>
                    <p>Our designing team designs with your taste, space, and budget, Also our team will guide you.

                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="fas fa-tools why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">Quality Products
                    </h4>
                    <p>We provide high quality products only to our customers, our prodcuts are certified with WIOC.

                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="fas fa-trophy why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">Awards Winning Team
                    </h4>
                    <p>In 1984 we won the best resedential interior designer awrard from organization.

                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="far fa-file-alt why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">Free Consultation
                    </h4>
                    <p>We providing free consultation about interior quality, space, budget and etc but it is free for all.

                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center justify-content-center">
                <i class="far fa-clock why-choose-icons me-3"></i>
                <div>
                    <h4 class="mb-3 fw-bold">24/7 Customer Support
                    </h4>
                    <p>whenever and wherever you need our support you can contact our 24/7 customer support team.

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

        <div class="row mt-1 mb-5 justify-content-center ">
            <div class=" imagine-card col-3  d-flex align-items-center  ">
                <i class="fa fa-user imagine-icon me-3"></i>
                <div>
                    <h5 >DETAILED CONSULTATION</h5>
                    <p>Extensive discussion with you to understand your need.</p>
                </div>
            </div>

            <div class=" imagine-card col-3 d-flex align-items-center  ">
                <i class="fa fa-cog imagine-icon me-3"></i>
                <div>
                    <h5 >PREMIUM MATERIALS</h5>
                    <p>We source the best materials from reputable suppliers.</p>
                </div>
            </div>

            <div class=" imagine-card col-3 d-flex align-items-center ">
                <i class="fa fa-clock-o imagine-icon me-3"></i>
                <div>
                    <h5 >ON-TIME DELIVERY</h5>
                    <p>We ensure delivery of the project within the agreed deadline.</p>
                </div>
            </div>

        </div>
    </div>

</section>

@endsection
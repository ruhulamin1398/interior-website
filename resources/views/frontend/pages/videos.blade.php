@extends('frontend.include.app')

@section('pageTitle')
<title>Videos - Karigor Interior BD</title>
@endsection

@section('frontend')
<!-- breadcrumb start -->
<div class="container-fluid breadcrumb-area">
    <div class="container-lg">
        <div class="title">
            <h2>Our Videos</h2>
        </div>

    </div>
</div>
<!-- breadcrumb end -->



<!-- Video start -->


<section id="core-values-section mb-md-5  mt-md-5">

    <div class="container">
        <div class="section-title mb-md-5 pb-md-4 mt-5">
            <h1> Project<span> Video</span></h1>
        </div>
        <div class="row " data-aos="fade-up">
            <div class="card-group">
                @foreach ($Videos as $video)
                <div class="col-md-4  mb-md-4 core-values pe-3">
                    <div class="card w-100  ">
                        <div class="card-body p-0">
                            <div width="100%" height="100%">
                                {!!
                                \SOS\LaravelYoutubeFrameGenerator\Facades\YFrameFacade::width('100%')
                                ->height('300px')
                                ->isFullscreen(true)
                                ->generate($video->link)!!}
                            </div>

                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>




@endsection
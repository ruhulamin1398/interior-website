@extends('frontend.include.app')
@section('frontend')
<!-- breadcrumb start -->
<div class="container-fluid breadcrumb-area">
    <div class="container-lg">
        <div class="title">
            <h2>Contact Us</h2>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home-index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- breadcrumb end -->


<!-- contact section start -->


<section id="contact-section">
    <div>




        <div class="contact-form">
            <form>
                <div class="row">

                    <div class="mb-4 col-md-6 col-sm-12">
                        <input required type="text" name="name" placeholder="Your Name" class="form-control">
                    </div>

                    <div class="mb-4 col-md-6 col-sm-12">
                        <input required type="email" name="email" placeholder="Your Email" class="form-control">
                    </div>




                    <div class="mb-4 col-12">
                        <textarea class="form-control" placeholder="Your Message"></textarea>
                    </div>


                </div>

                <button type="submit" class="btn btn-secondary contact-button">Submit</button>
            </form>
        </div>

    </div>
</section>


<!-- contact section end -->


@endsection
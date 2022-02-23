@extends('frontend.include.app')

@section('pageTitle')
<title>Contact Us - Karigor Interior BD</title>
@endsection

@section('frontend')
<!-- breadcrumb start -->
<div class="container-fluid breadcrumb-area">
    <div class="container-lg">
        <div class="title">
            <h2>Contact Us</h2>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- breadcrumb end -->
@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    <strong class="text-center">{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!-- contact section start -->


































<section id="contact-section">
    <div>




        <div class="contact-form">
            <form action="{{route('contact.us.mail')}}" method="POST">
                @csrf
                <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-md-6 col-sm-12 text-center"">
                        <input required type="text" name="name" placeholder="Your Name" class="form-control">
                        <input required type="email" name="email" placeholder="Your Email" class="form-control mt-3">
                        <input required type="text" name="phone" placeholder="Your Phone" class="form-control mt-3">
                        <textarea class="form-control mt-3" name="message" placeholder="Your Message"></textarea>
                    </div>
                    @if($errors->has('name'))
                    <span class="text-danger mt-2 ">{{ $errors->first('name') }}</span>
                    @endif




                    @if($errors->has('email'))
                    <span class="text-danger mt-2 ">{{ $errors->first('email') }}</span>
                    @endif

                  
                    @if($errors->has('message'))
                    <span class="text-danger mt-2 ">{{ $errors->first('message') }}</span>
                    @endif

                </div>

               
                    <div class="col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-secondary contact-button ">Submit</button>
                    </div>
                </div>

               
            </form>
        </div>

    </div>
</section>


<!-- contact section end -->


@endsection
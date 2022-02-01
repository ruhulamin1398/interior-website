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
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- breadcrumb end -->
@if($message = Session::get('success'))
<div class="alert alert-success text-center">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong class="text-center">{{ $message }}</strong>
</div>
@endif

<!-- contact section start -->


<section id="contact-section">
    <div>




        <div class="contact-form">
            <form action="{{route('contact.us.mail')}}" method="POST">
                @csrf
                <div class="row">

                    <div class="mb-4 col-md-6 col-sm-12">
                        <input required type="text" name="name" placeholder="Your Name" class="form-control">
                    </div>
                    @if($errors->has('name'))
                    <span class="text-danger mt-2 ">{{ $errors->first('name') }}</span>
                    @endif
                    <div class="mb-4 col-md-6 col-sm-12">
                        <input required type="email" name="email" placeholder="Your Email" class="form-control">
                    </div>


                    @if($errors->has('email'))
                    <span class="text-danger mt-2 ">{{ $errors->first('email') }}</span>
                    @endif

                    <div class="mb-4 col-12">
                        <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                    </div>
                    @if($errors->has('message'))
                    <span class="text-danger mt-2 ">{{ $errors->first('message') }}</span>
                    @endif

                </div>

                <button type="submit" class="btn btn-secondary contact-button">Submit</button>
            </form>
        </div>

    </div>
</section>


<!-- contact section end -->


@endsection
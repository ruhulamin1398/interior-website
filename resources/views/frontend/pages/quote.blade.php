@extends('frontend.include.app')
@section('frontend')

@if($message = Session::get('success'))
<div class="alert alert-success text-center">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong class="text-center">{{ $message }}</strong>
</div>
@endif
<section id="quote-section">
    <div class="container pt-5">

        <div class="section-title mb-5">
            <h1>GET<span> A QUOTE</span></h1>
            <p>See how we can provide your premium furniture and solutions on-time and on-budget</p>
        </div>


        <div class="quote-form">
            <form action="{{route('quote.mail')}}" method="POST">
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

                    <div class="mb-4 col-md-6 col-sm-12">
                        <input required type="text" name="phone" placeholder="Phone Number" class="form-control">
                    </div>

                    @if($errors->has('phone'))
                    <span class="text-danger mt-2 ">{{ $errors->first('phone') }}</span>
                    @endif

                    <div class="mb-4 col-md-6 col-sm-12">
                        <select class="form-select" name="projecttype" aria-label="Default select example">
                            <option value="Interior" selected>Interior</option>
                            <option value="Construction">Construction</option>
                        </select>
                    </div>

                    <div class="mb-4 col-md-3 col-sm-12">
                        <label class="mb-2 text-capitalize radio-label"> <b>What is your estimated budget for this project?*</b> </label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="budget" id="exampleRadios1" value="1,00,000 - 5,00,000">
                            <label class="form-check-label" for="exampleRadios1">
                                1,00,000 - 5,00,000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="budget" id="exampleRadios2" value="5,00,000 - 10,00,000">
                            <label class="form-check-label" for="exampleRadios2">
                                5,00,000 - 10,00,000
                            </label>
                        </div>

                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="budget" id="exampleRadios3" value="10,00,000 - 20,00,000">
                            <label class="form-check-label" for="exampleRadios3">
                                10,00,000 - 20,00,000
                            </label>
                        </div>

                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="budget" id="exampleRadios3" value="20,00,000 - 50,00,000">
                            <label class="form-check-label" for="exampleRadios3">
                                20,00,000 - 50,00,000
                            </label>
                        </div>

                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="budget" id="exampleRadios3" value="50,00,000+">
                            <label class="form-check-label" for="exampleRadios3">
                                50,00,000 +
                            </label>
                        </div>


                    </div>



                    <div class="mb-4 col-md-3 col-sm-12">
                        <label class="mb-2 text-capitalize radio-label "> <b>Is there a particular deadline for this project?*</b> </label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="deadline" id="ab1" value="yes">
                            <label class="form-check-label" for="ab1">
                                Yes
                            </label>
                        </div>
                        <div class="">
                            <input class="form-check-input" type="radio" name="deadline" id="ab2" value="no">
                            <label class="form-check-label" for="ab2">
                                No
                            </label>
                        </div>

                    </div>


                    <div class="mb-4 col-md-3 col-sm-12">
                        <label class="mb-2 text-capitalize radio-label"> <b>What is the best way to contact you?*</b> </label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contact" id="exampleRadios1" value="Phone">
                            <label class="form-check-label" for="exampleRadios1">
                                Phone
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contact" id="exampleRadios2" value="Email">
                            <label class="form-check-label" for="exampleRadios2">
                                Email
                            </label>
                        </div>

                    </div>

                    <div class="mb-4 col-md-3 col-sm-12">
                        <label class="mb-2 text-capitalize radio-label "> <b>Have you worked with a professional interior design firm before?*</b> </label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" id="exampleRadios1" value="yes">
                            <label class="form-check-label" for="exampleRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" id="exampleRadios2" value="no">
                            <label class="form-check-label" for="exampleRadios2">
                                No
                            </label>
                        </div>

                    </div>



                    <div class="mb-4 col-12">
                        <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                    </div>


                </div>

                <button type="submit" class="btn btn-secondary quote-button">Submit</button>
            </form>
        </div>

    </div>
</section>

@endsection
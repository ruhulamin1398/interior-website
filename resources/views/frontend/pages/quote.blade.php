@extends('frontend.include.app')
@section('frontend')
<section id="quote-section" >
        <div class="container pt-5">

            <div class="section-title mb-5">
                <h1>GET<span> A QUOTE</span></h1>
                <p>See how we can provide your premium furniture and solutions on-time and on-budget</p>
            </div>
            

            <div class="quote-form">
                <form>
                    <div class="row">

                        <div class="mb-4 col-md-6 col-sm-12">
                            <input required type="text" name="name" placeholder="Your Name" class="form-control">
                        </div>

                        <div class="mb-4 col-md-6 col-sm-12">
                            <input required type="email" name="email" placeholder="Your Email" class="form-control" >
                        </div>

                        <div class="mb-4 col-md-6 col-sm-12">
                            <input required type="email" name="Phone" placeholder="Phone Number" class="form-control" >
                        </div>

                        <div class="mb-4 col-md-6 col-sm-12">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Interior</option>
                                <option value="1">Construction</option>
                              </select>
                        </div>

                        <div class="mb-4 col-12">
                            <textarea class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        

                    </div>
                    
                    <button type="submit" class="btn btn-secondary quote-button">Submit</button>
                  </form>
            </div>

        </div>
    </section>

@endsection
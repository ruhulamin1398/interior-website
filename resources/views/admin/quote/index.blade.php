@extends('admin.include.app')
@section('admin')


<div class="container">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <h2 class="py-3">Quote Data</h2>
    @foreach ($quotes as $quote)
    <div class="container px-4 py-3 my-3 shadow rounded">
        <h3><b> Name: </b><span class="fw-normal">{{ $quote->name }}</span></h3>
        <h5 class="py-2">Contact: <span class="fw-normal" style="font-size: 16px">{{ $quote->phone }} | </span> <span
                class="fw-normal" style="font-size: 18px">{{ $quote->email }}</span></h5>
        <h5>Project Type: <span class="fw-normal" style="font-size: 18px">{{ $quote->projecttype }} </span> </h5>
        <hr>
        <div class="py-3">
            <h6>What Is Your Estimated Budget For This Project?</h6>
            <span style="font-size: 16px">Answer: {{ $quote->budget }}</span>
        </div>
        <div class="py-3">
            <h6>Is There A Particular Deadline For This Project?</h6>
            <span style="font-size: 16px">Answer: {{ $quote->contact }}</span>
        </div>
        <div class="py-3">
            <h6>Have You Worked With A Professional Interior Design Firm Before?</h6>
            <span style="font-size: 16px">Answer: {{ $quote->experience }}</span>
        </div>
        <div class="py-3">
            <h6>Message</h6>
            <span style="font-size: 16px">" {{ $quote->message }} "</span>
        </div>
        <div class="">
            <h5 style="font-size: 16px; text-align: right;">Created: {{ $quote->created_at }} </h6>
        </div>

    </div>
    @endforeach


</div>



@endsection
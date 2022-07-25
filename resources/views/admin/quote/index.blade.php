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
    <div class="container py-2 my-3">
        <h3><b> Name: </b><span class="fw-normal">{{ $quote->name }}</span></h3>
        <h5></h5> Contact:
    </div>
    @endforeach


</div>



@endsection
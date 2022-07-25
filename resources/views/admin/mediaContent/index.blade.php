@extends('admin.include.app')
@section('admin')


<div class="container">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <h2 class="py-3">Media Content</h2>
    @foreach ($mediaContents as $mediaContent)

    <form action="{{ route('media-contents.update',$mediaContent->id) }}" method="post" enctype="multipart/form-data">
        <h5 class="pb-2"><b>Title:</b></h5>
        <input type="title" name="title" value="{{ $mediaContent->title }}" class="form-control">
        @method('put')
        @csrf
        <div class="d-flex">
            <div class="col-md-4">
                <img src="{{ asset('images/'.$mediaContent->media) }}" class="img-fluid my-3" alt="">
                <label for="" class="pt-3"><b>Upload Image:</b> </label>
                <input type="file" name="media" id="" value="{{ $mediaContent->media }}">
            </div>
        </div>
        <button class="btn btn-primary px-4 float-right">Update Media</button>
    </form>
    <br>
    <br>
    @endforeach

</div>



@endsection
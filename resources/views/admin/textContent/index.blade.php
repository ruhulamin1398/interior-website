@extends('admin.include.app')
@section('admin')


<div class="container">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <h2 class="py-3">Text Content</h2>
    @foreach ($textContents as $item)

    <form action="{{ route('text-contents.update',$item->id) }}" method="post">
        <h5 class="pb-2"><b>Title:</b></h5>
        <input type="title" name="title" value="{{ $item->title }}" class="form-control">
        @method('put')
        @csrf
        <textarea name="text" id="" cols="20" rows="10" class="form-control my-3">{{ $item->text }}</textarea>
        <button class="btn btn-info float-right">Update</button>
    </form>
    <br>
    <br>
    @endforeach
</div>



@endsection
@extends('admin.include.app')
@section('admin')

<div class="card card-bordered">

    <div class="card-inner ">
        <h5 class="card-title float-left mt-1 ">Add videos</h5>

        <a href="{{ route('videos.index') }}" class="btn btn-primary float-right"><em
                class="icon ni ni-file-docs"></em><span class="ml-1">Manage
                videos</span></a>

    </div>
</div>
<div class="card card-bordered h-100">
    <div class="card-inner">

        <form action="{{ route('videos.store') }}" method="post">
            @csrf
            <div class="form-group col-md-4 p-0">
                <label class="form-label" for="full-name">Serial</label>
                <div class="form-control-wrap">
                    <input type="number" class="form-control" name="serial" required>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="full-name">Title</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" name="title" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="full-name">Youtube Video Link</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" name="link" required>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
            </div>
        </form>
    </div>
</div>


@endsection
@extends('admin.include.app')
@section('admin')

<div class="card card-bordered">

    <div class="card-inner ">
        <h5 class="card-title float-left mt-1 ">Provide Information</h5>

        <a href="{{route('project.index')}}" class="btn btn-primary float-right"><em class="icon ni ni-file-docs"></em><span class="ml-1">Manage Project Construction</span></a>

    </div>
</div>
<div class="card card-bordered h-100">
    <div class="card-inner">

        <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label" for="full-name">Project Title</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" name="title">
                    @if($errors->has('title'))
                    <span class="text-danger ">{{ $errors->first('title') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="full-name">Select Service</label>
                <div class="form-control-wrap">
                    <select name="sub_category_id" class="form-control">
                        @foreach($serviceList as $list)
                        <option value="{{$list->id}}">{{$list->title}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('title'))
                    <span class="text-danger ">{{ $errors->first('sub_category_id') }}</span>
                    @endif
                </div>
            </div>

            
            <div class="form-group">
                <label class="form-label" for="full-name">Project Status</label>
                <div class="form-control-wrap">
                    <select name="projectStatus" class="form-control">
                    <option value="0">Upcoming</option>
                    <option value="1">Ongoing</option>
                    <option value="2">Delivered</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="form-label" for="full-name">Serial</label>
                <div class="form-control-wrap">
                    <input type="number" class="form-control" name="serial">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="full-name">Short Description</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" name="short_description" >
                    @if($errors->has('title'))
                    <span class="text-danger ">{{ $errors->first('short_description') }}</span>
                    @endif
                </div>
            </div>

            
            <div class="form-group">
                <label class="form-label" for="full-name">Long Description</label>
                <div class="form-control-wrap">
                    
                    <textarea id="summernote" name="long_description" class="form-control" ></textarea>
                    @if($errors->has('title'))
                    <span class="text-danger ">{{ $errors->first('long_description') }}</span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
            </div>
        </form>
    </div>
</div>


@endsection

@section('js')
<script>
$(document).ready(function() {
$('#summernote').summernote({
        placeholder: 'Write here a description',
        tabsize: 2,
        height: 200
      });

// var serviceList = @json($serviceList);
// console.log(serviceList);

});
</script>
@endsection
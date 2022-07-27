@extends('admin.include.app')
@section('admin')


@if($message = Session::get('success'))
<div class="alert alert-info text-center">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong class="text-center">{{ $message }}</strong>
</div>
@endif

<div class="card card-bordered">

    <div class="card-inner ">
        <h5 class="card-title float-left mt-1 ">Add Brand Image</h5>



    </div>
</div>
<div class="card card-bordered h-100">
    <div class="card-inner">



        <div class="row gy-4">

            <div class="col-lg-4">
                <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="form-group">
                                <label class="form-label" for="customMultipleFilesLabel">Upload Picture</label>
                                <div class="form-control-wrap">
                                    <div class="custom-file">
                                        <input type="file" multiple="" name="image[]" class="custom-file-input"
                                            id="customMultipleFiles">
                                        <label class="custom-file-label" for="customMultipleFiles">Choose files</label>

                                        @if($errors->has('image'))
                                        <span class="text-danger mt-2 ">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Add Clients</button>
                        </div>
                    </div>


                </form>
            </div>


            <div class="col-lg-8">
                <div class="card card-bordered">
                    <div class="card-inner">

                        <div class="card card-preview">
                            <div class="card-inner">
                                <table class="datatable-init nowrap nk-tb-list nk-tb-ulist"
                                    data-auto-responsive="false">
                                    <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Image</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Action</span></th>

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach($brandImages as $image )


                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col tb-col-md">
                                                <img src="/brand/picture/{{$image->image}}" alt="no image"
                                                    class="img-thumbnail" style="height: 90px;width: 150px">
                                            </td>

                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 ">
                                                    <li>
                                                        <form action="{{ route('delete.brand',$image->id) }}"
                                                            method="post">
                                                            @csrf


                                                            <button type="submit"
                                                                onclick="return confirm('Are you sure to delete !!');"
                                                                class="btn btn-trigger btn-icon" data-toggle="tooltip"
                                                                data-placement="top" title="Delete">
                                                                <em class="text-danger icon ni ni-trash"></em>

                                                            </button>
                                                        </form>
                                                    </li>


                                                </ul>
                                            </td>
                                        </tr><!-- .nk-tb-item  -->

                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .card-preview -->

                    </div>
                </div>
            </div>

        </div>


    </div>
</div>


@endsection
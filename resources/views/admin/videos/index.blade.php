@extends('admin.include.app')
@section('admin')


<div class="nk-block nk-block-lg">
    <div class="nk-block-head">

        <div class="card card-bordered">

            <div class="card-inner ">
                <h5 class="card-title float-left mt-1 ">Video Contents</h5>

                <a href="{{ route('videos.create') }}" class="btn btn-primary float-right"><em
                        class="icon ni ni-file-docs"></em><span class="ml-1">Add Video</span></a>

            </div>
        </div>


    </div>
    @if($message = Session::get('success'))
    <div class="alert alert-info text-center">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong class="text-center">{{ $message }}</strong>
    </div>
    @endif
    <div class="card card-preview">
        <div class="card-inner">
            <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col"><span class="sub-text">Serial</span></th>

                        <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Video</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Link</th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Action</span></th>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($videoData as $videoItem)

                    <tr class="nk-tb-item">
                        <td class="nk-tb-col tb-col-mb">
                            <span class="tb-lead">{{ $videoItem->serial }}</span>
                        </td>

                        <td class="nk-tb-col tb-col-mb">
                            <span class="tb-lead"> {{ $videoItem->title }} </span>
                        </td>

                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-lead">
                                {!!
                                \SOS\LaravelYoutubeFrameGenerator\Facades\YFrameFacade::generate($videoItem->link)!!}
                            </span>
                        </td>

                        <td class="nk-tb-col tb-col-md">
                            <span class="tb-lead">{{ $videoItem->link }}</span>
                        </td>


                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1 float-left">
                                <li>
                                    <a href="{{ route('videos.edit',$videoItem->id) }}" class="btn btn-trigger btn-icon"
                                        data-toggle="tooltip" data-placement="top" title="Edit">

                                        <em class="icon ni ni-edit-alt-fill "></em>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('videos.destroy',$videoItem->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="return confirm('Are you sure to delete !!');"
                                            class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top"
                                            title="Delete">
                                            <em class="text-danger icon ni ni-trash"></em>

                                        </button>
                                    </form>
                                </li>


                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  -->
                    @php
                    @endphp
                    @endforeach


                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div> <!-- nk-block -->




@endsection
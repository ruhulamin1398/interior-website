<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoData = Video::all();
        return view('admin.videos.index', compact('videoData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videoData = new Video();
        $videoData->serial = $request->serial;
        $videoData->title = $request->title;
        $videoData->link = $request->link;

        if ($videoData->save()) {
            return redirect()->route('videos.index')->with('success', 'Information Save Succesfully');
        } else {
            return redirect()->route('videos.index')->with('error', 'Information Save Faild');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $SingleData = Video::find($id);
        return view('admin.videos.edit', compact('SingleData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoRequest  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video->serial = $request->serial;
        $video->title = $request->title;
        $video->link = $request->link;

        $video->update();
        return redirect()->route('videos.index')->with('success', 'Data Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Video::find($id)->delete()) {
            return redirect()->route('videos.index')->with('success', 'Deleted Succesfully');

        }

    }
}

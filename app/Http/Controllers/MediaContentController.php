<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMediaContentRequest;
use App\Http\Requests\UpdateMediaContentRequest;
use App\Models\MediaContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MediaContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediaContents = MediaContent::orderBy('id')->get();
        return view('admin.mediaContent.index', compact('mediaContents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMediaContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaContentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaContent  $mediaContent
     * @return \Illuminate\Http\Response
     */
    public function show(MediaContent $mediaContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaContent  $mediaContent
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaContent $mediaContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaContentRequest  $request
     * @param  \App\Models\MediaContent  $mediaContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MediaContent $mediaContent)
    {
        $mediaContent->title = $request->title;

        if ($request->hasFile('media')) {

            $oldfile = 'images/' . $mediaContent->media;

            $file = $request->file('media');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . 'FrontEndMedia.' . $extension;
            $file->move('images/', $fileName);
            $mediaContent->media = $fileName;

        }
        $mediaContent->save();
        return back()->with('success', 'Contents Update Succesfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaContent  $mediaContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaContent $mediaContent)
    {
        //
    }
}

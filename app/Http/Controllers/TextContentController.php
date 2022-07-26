<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretextContentRequest;
use App\Http\Requests\UpdatetextContentRequest;
use App\Models\TextContent;
use Illuminate\Http\Request;

class TextContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textContents = textContent::orderBy('id')->get();

        return view('admin.textContent.index', compact('textContents'));

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
     * @param  \App\Http\Requests\StoretextContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretextContentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TextContent  $textContent
     * @return \Illuminate\Http\Response
     */
    public function show(textContent $textContent)
    {
        abort(404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TextContent  $textContent
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        return "edit form";
        // dd($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetextContentRequest  $request
     * @param  \App\Models\TextContent  $textContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, textContent $textContent)
    {
        // return $request;

        $textContent->title = $request->title;
        $textContent->text = $request->text;
        $textContent->update();
        return back()->with('success', 'Information Update Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TextContent  $textContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(textContent $textContent)
    {
        //
    }
}

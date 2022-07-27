<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoFrontendController extends Controller
{
    public function index()
    {
        $Videos = Video::orderBy('serial', 'asc')->get();
        return view('frontend.pages.videos', compact('Videos'));
    }
}

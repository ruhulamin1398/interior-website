<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SubCategory;


class InteriorController extends Controller
{
  public function index()
  {

    $interiorSerivce = SubCategory::where('category_id', '1')->get();
    $interiorProjects = Project::where('category_id', '1')->with('images')->orderBy('serial', 'asc')->get();
    return view('frontend.pages.interior', compact('interiorSerivce', 'interiorProjects'));
  }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SubCategory;


class ConstructionController extends Controller
{
  public function index (){
    $constructionSerivce = SubCategory::where('category_id','2')->get();
    $constructionProjects = Project::where('category_id', '2')->orderBy('serial', 'asc')->with('images')->get();
    return view('frontend.pages.construction',compact('constructionSerivce','constructionProjects'));
  }
}

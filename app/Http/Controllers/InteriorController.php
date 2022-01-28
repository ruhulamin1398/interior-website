<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteriorController extends Controller
{
  public function index(){
      return view('frontend.pages.interior');
  }
}

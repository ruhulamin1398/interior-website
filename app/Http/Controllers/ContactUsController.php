<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(){
        return view('frontend.pages.contactus');
    }

    public function ContactUsmail(Request $request){

        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'message' => ['required'],
        ]);

        $contactUsMail =[

            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,

            ];

            Mail::to($request->email)->send(new ContactUsMail($contactUsMail));
          
  return back()->with('success','Thanks For your Message');
    } 
}
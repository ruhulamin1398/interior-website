<?php

namespace App\Http\Controllers;

use App\Mail\QuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function Quotemail(Request $request){


        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
        ]);

        $quoteMail =[

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'projecttype' => $request->projecttype,
            'budget'=> $request->budget,
            'deadline'=> $request->deadline,
            'contact'=> $request->contact,
            'experience'=> $request->experience,
            'message'=> $request->message,

            ];

            Mail::to('rafaatabtahe@gmail.com')->send(new QuoteMail($quoteMail));
          
  return back()->with('success','Thanks For your Message We will Contact You Soon.');
    } 
}

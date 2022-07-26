<?php

namespace App\Http\Controllers;

use App\Mail\QuoteMail;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::get();
        return view('admin.quote.index', compact('quotes'));
    }
    public function Quotemail(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
        ]);

        // $quoteData = [

        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'projecttype' => $request->projecttype,
        //     'budget' => $request->budget,
        //     'deadline' => $request->deadline,
        //     'contact' => $request->contact,
        //     'experience' => $request->experience,
        //     'message' => $request->message,

        // ];
        // return $quoteData;

        // DB::table('quotes')->insert($quoteData);
        $quote = new Quote();
        $quote->name = $request->name;
        $quote->email = $request->email;
        $quote->phone = $request->phone;
        $quote->projecttype = $request->projecttype;
        $quote->budget = $request->budget;
        $quote->deadline = $request->deadline;
        $quote->contact = $request->contact;
        $quote->experience = $request->experience;
        $quote->message = $request->message;

        if ($quote->save()) {
            return back()->with('success', 'Thanks For The Order We will Contact You Soon.');
        } else {
            return "Faild";
        }

    }
}

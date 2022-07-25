<?php

namespace App\Http\Controllers;

use App\Mail\QuoteMail;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $quoteData = [

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'projecttype' => $request->projecttype,
            'budget' => $request->budget,
            'deadline' => $request->deadline,
            'contact' => $request->contact,
            'experience' => $request->experience,
            'message' => $request->message,

        ];
        // return $quoteData;

        DB::table('quotes')->insert($quoteData);

        return back()->with('success', 'Thanks For The Order We will Contact You Soon.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.pages.contactus');
    }
    public function indexBackend()
    {
        $contactUsData = ContactUs::get();
        return view('admin.contactUs.index', compact('contactUsData'));
    }

    public function ContactUsmail(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'message' => ['required'],

        ]);

        // DB::table('contact_us')->insert($validatedData);
        $contactData = new ContactUs();
        $contactData->name = $request->name;
        $contactData->email = $request->email;
        $contactData->phone = $request->phone;
        $contactData->message = $request->message;

        if ($contactData->save()) {
            return back()->with('success', 'Thanks For your Message We will Contact You Soon.');
        } else {
            return "Faild";
        }

    }
}

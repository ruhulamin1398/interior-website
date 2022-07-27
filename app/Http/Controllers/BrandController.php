<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function AdminIndex()
    {

        $brandImages = Brand::get();

        return view('admin.brands.index', compact('brandImages'));
    }

    public function FrontIndex()
    {

        $brandImages = Brand::get();
        return view('frontend.pages.brands', compact('brandImages'));
    }

    public function AddBrand(Request $request)
    {

        $this->validate($request, [
            'image' => 'required',

        ], [
            'image.required' => 'Please Select Images',

        ]);

        $image = $request->file('image');

        foreach ($image as $images) {

            $file = $images;
            $extension = $file->getClientOriginalExtension();
            $fileName = str_replace(' ', '_', hexdec(uniqid())) . time() . 'Brand_Image.' . $extension;
            $file->move('brand/picture', $fileName);
            $brandImage = new Brand();
            $brandImage->image = $fileName;
            $brandImage->save();
        }

        return back()->with('success', 'Brand Images Uploaded Successfully');
    }

    public function DeleteBrand($id)
    {

        Brand::find($id)->delete();
        return back()->with('success', 'Deleted Succesfully');

    }
}

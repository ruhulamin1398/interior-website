<?php

namespace App\Http\Controllers;


use App\Models\ProjectImage;
use Illuminate\Http\Request;

class ProjectImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projectID = $request->projectid;
        $projectTitle = $request->title;
        $imageList = ProjectImage::where('project_id',$projectID)->get();

       

        return view('admin.projects.interior.image.index',compact('projectID','imageList','projectTitle'));
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'    => 'required',
            
        ],[
            'image.required'     => 'Please Select Images',
    
        ]);

        $image = $request->file('image');

        foreach($image as $images){

          
                $file = $images;
                $extension = $file->getClientOriginalExtension();
                $fileName = str_replace(' ', '_', hexdec(uniqid())).time() . 'Project_Interior_Image.' . $extension;
                $file->move('project/picture', $fileName);
                $projectImage = new ProjectImage();
                $projectImage->image = $fileName;
                $projectImage->project_id = $request->projectid;
                $projectImage->save();

                  }

        return back()->with('success','Images Uploaded Successfully');
  
    }

   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectImage::find($id)->delete();
        return back()->with('success','Deleted Succesfully');
    }

    public function ViewGallery($id){

    $projectImages = ProjectImage::where('project_id',$id)->get();
    
    return  view('frontend.pages.gallery',compact('projectImages'));
      }
}

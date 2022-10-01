<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $about=About::all();
        return view('admin/abouts.about',compact('about'));
    }
    public function create()
    {
        return view('admin/abouts.create');
    }
    public function store(Request $request){
        $about=new About;
        $about->about_title=$request->Input('about_title');

        $about->description=$request->Input('description');
        $about->quote=$request->Input('quote');
       
        
        if($request->hasFile('image1'))
        {
          $file=$request->file('image1');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $filename=uniqid();
          $file->move('uploads/abouts/',$filename);
          $about->image1=$filename;
        }
        if($request->hasFile('image2'))
        {
          $file=$request->file('image2');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $filename=uniqid();
          $file->move('uploads/abouts/',$filename);
          $about->image2=$filename;
        }
        if($request->hasFile('image3'))
        {
          $file=$request->file('image3');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $filename=uniqid();
          $file->move('uploads/abouts/',$filename);
          $about->image3=$filename;
        }
        $about->status=$request->Input('status');
        $about->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect()->back()->with('status','about added successfully');
    }
    public function edit($id)
   {
    $about= About::find($id);
    return view('admin/abouts.edit',compact('about'));
    }
    public function update(Request $request,$id){
        $about= About::find($id);
        $about->about_title=$request->Input('about_title');

        $about->description=$request->Input('description');
        $about->quote=$request->Input('quote');
       
        
        if($request->hasFile('image1'))
        {
            $destination='uploads/abouts/'.$about->image1;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          $file=$request->file('image1');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $filename=uniqid();
          $file->move('uploads/abouts/',$filename);
          $about->image1=$filename;
        }
        if($request->hasFile('image2'))
        {
            $destination='uploads/abouts/'.$about->image2;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          $file=$request->file('image2');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $filename=uniqid();
          $file->move('uploads/abouts/',$filename);
          $about->image2=$filename;
        }
        if($request->hasFile('image3'))
        {
            $destination='uploads/abouts/'.$about->image3;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          $file=$request->file('image3');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $filename=uniqid();
          $file->move('uploads/abouts/',$filename);
          $about->image3=$filename;
        }
        $about->status=$request->Input('status');
        $about->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect()->back()->with('status','about updated successfully');
    }
    public function destroy($id)
    {
      $about=About::find($id);
      
      $destination='uploads/abouts/'.$about->image;
      if(File::exists($destination)){
        File::delete($destination);
      }

      $about->delete();
      return redirect()->back()->with('status','about  deleted successfully');

    }


}




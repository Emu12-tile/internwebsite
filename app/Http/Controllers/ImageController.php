<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index()
    
        {
            $image=Image::all();
            return view('admin/gallery/image.image',compact('image'));
        }
        public function create()
        {
            return view('admin/gallery/image.create');
        }
        
        public function store(Request $request){
            $image=new Image;
           
            
            if($request->hasFile('images'))
            {
              $file=$request->file('images');
              $extention=$file->getClientOriginalExtension();
              $filename=time().'.'.$extention;
              $file->move('uploads/images/',$filename);
              $image->images=$filename;
            }
            $image->status=$request->Input('status');
            $image->save();
            // $listing->profile_image=$request->Input('profile_image');
            // return view('listing.create');
            return redirect('images')->with('status','home added successfully');
        }
        public function edit($id)
       {
        $image= Image::find($id);
        return view('admin/gallery/image.edit',compact('image'));
        }
        public function update(Request $request,$id){
            $image= Image::find($id);
           
            if($request->hasFile('images'))
            {
                $destination='uploads/images/'.$image->images;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
              $file=$request->file('images');
              $extention=$file->getClientOriginalExtension();
              $filename=time().'.'.$extention;
              $file->move('uploads/images/',$filename);
              $image->images=$filename;
            }
    
          
          
            
           
            $image->status=$request->Input('status');
            $image->update();
            // $listing->profile_image=$request->Input('profile_image');
            // return view('listing.create');
            return redirect('images')->with('status','images updated successfully');
        }
        public function destroy($id)
        {
          $image=Image::find($id);
          
          $destination='uploads/images/'.$image->images;
          if(File::exists($destination)){
            File::delete($destination);
          }
    
          $image->delete();
          return redirect('images')->with('status','images  deleted successfully');
    
        }
    
    
}

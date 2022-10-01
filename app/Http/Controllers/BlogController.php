<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog=Blog::all();
        return view('admin/blogs.blog',compact('blog'));
         
    }
    public function create()
    {
        return view('admin/blogs.create');
    }
    

    public function store(Request $request){
        // $request->validate([
        //     'topic'=>'required',
        //     'content'=>'required',
        //     'image'=>'required|image'
    


       $blog=new Blog;
       $blog->topic=$request->topic;
       $blog->content=$request->content;
       if($request->hasfile('image')){
          $file=$request->file('image');
          $extension=$file->getClientOriginalExtension();
          $filename=time().'.'.$extension;
          $file->move('uploads/blogs/',$filename);
          $blog->image=$filename;
      }
      $blog->user_id=auth()->user()->id;
     
      $blog->save();
       

       return redirect('blogs')->with('success','upload succesfully');

    }

    public function edit($id)
    {
     $blog=Blog::find($id);
     return view('admin/blogs.edit',compact('blog'));
     }
     public function update(Request $request,$id){
         $blog= Blog::find($id);
         $blog->topic=$request->Input('topic');
         if($request->hasFile('image'))
         {
             $destination='uploads/blogs/'.$blog->image;
             if(File::exists($destination))
             {
                 File::delete($destination);
             }
           $file=$request->file('image');
           $extention=$file->getClientOriginalExtension();
           $filename=time().'.'.$extention;
           $file->move('uploads/blogs/',$filename);
           $blog->image=$filename;
         }
 
         $blog->content=$request->Input('content');
       
         
        
         $blog->status=$request->Input('status');
         $blog->update();
         // $listing->profile_image=$request->Input('profile_image');
         // return view('listing.create');
         return redirect('blogs')->with('status','blog updated successfully');
     }
     public function destroy($id)
     {
       $blog=Blog::find($id);
       
       $destination='uploads/blogs/'.$blog->image;
       if(File::exists($destination)){
         File::delete($destination);
       }
 
       $blog->delete();
       return redirect('blogs')->with('status','blogs  deleted successfully');
 
     }
}

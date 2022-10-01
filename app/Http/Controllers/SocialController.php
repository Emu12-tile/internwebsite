<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $socials=Social::all();
        return view('admin/social_icons.social',compact('socials'));
    }
    public function create()
    {
        return view('admin/social_icons.create');
    }
    public function store(Request $request){
        $social=new Social;
        $social->url=$request->Input('url');
        $social->icon=$request->Input('icon');
      
       
        $social->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('socials')->with('status','service added successfully');
    }
    public function edit($id)
   {
    $social= Social::find($id);
    return view('admin/social_icons.edit',compact('social'));
    }
    public function update(Request $request,$id){
        $social= Social::find($id);
        $social->url=$request->Input('url');
        
        $social->icon=$request->Input('icon');
      
        $social->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('socials')->with('status','service updated successfully');
    }
    public function destroy($id)
    {
      $social=Social::find($id);
      
      

      $social->delete();
      return redirect('socials')->with('status','socials  deleted successfully');

    }
    // public function service_detail($id){
    //     $service=Social::find($id);
    //     return view('service-detail',['service'=>$service]);
    // }
    
}

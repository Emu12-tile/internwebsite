<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $profile=Profile::all();
        return view('admin/prof.profile',compact('profile'));
    }
    public function create()
    {
        return view('admin/prof.create');
    }
    public function store(Request $request){
        $profile=new Profile;
        $profile->full_name=$request->Input('full_name');

        $profile->phone_number=$request->Input('phone_number');

        $profile->address=$request->Input('address');
        $profile->experience=$request->Input('experience');
        $profile->email=$request->Input('email');
        $profile->birthdate=$request->Input('birthdate');
       
        

        $profile->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('profiles')->with('status','profiles added successfully');
    }
    public function edit($id)
   {
    $profile= Profile::find($id);
    return view('admin/prof.edit',compact('profile'));
    }
    public function update(Request $request,$id){
        $profile= Profile::find($id);
        $profile->full_name=$request->Input('full_name');
        
        $profile->phone_number=$request->Input('phone_number');

        $profile->address=$request->Input('address');
        $profile->experience=$request->Input('experience');
        $profile->email=$request->Input('email');
        $profile->birthdate=$request->Input('birthdate');


   
        $profile->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('profiles')->with('status','profiles updated successfully');
    }
    public function destroy($id)
    {
      $profile=Profile::find($id);
      
      

      $profile->delete();
      return redirect('profiles')->with('status','profiles  deleted successfully');

    }
    
    
}

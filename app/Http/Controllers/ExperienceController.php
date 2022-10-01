<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $experience=Experience::all();
        return view('admin/experiences.experience',compact('experience'));
    }
    public function create()
    {
        return view('admin/experiences.create');
    }
    public function store(Request $request){
        $experience=new Experience;
        $experience->responsiblity=$request->Input('responsiblity');

        $experience->companyname=$request->Input('companyname');
        $experience->duration=$request->Input('duration');
        
        
        $experience->status=$request->Input('status');
        $experience->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('experiences')->with('status','experiences added successfully');
    }
    public function edit($id)
   {
    $experience= Experience::find($id);
    return view('admin/experiences.edit',compact('experience'));
    }
    public function update(Request $request,$id)
    {
        $experience= Experience::find($id);
        $experience->responsiblity=$request->Input('responsiblity');
        
        $experience->companyname=$request->Input('companyname');
        $experience->duration=$request->Input('duration');
       


        $experience->status=$request->Input('status');
        $experience->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('experiences')->with('status','experience updated successfully');
    }
    public function destroy($id)
    {
      $experience=Experience::find($id);
      
      

      $experience->delete();
      return redirect('experiences')->with('status','experience  deleted successfully');

    }
    
    
}

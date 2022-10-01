<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $education=Education::all();
        return view('admin/educations.education',compact('education'));
    }
    public function create()
    {
        return view('admin/educations.create');
    }
    public function store(Request $request){
        $education=new Education;
        $education->institution_name=$request->Input('institution_name');

        $education->degree_type=$request->Input('degree_type');
        $education->department=$request->Input('department');
        $education->start_year=$request->Input('start_year');
        $education->passing_year=$request->Input('passing_year');
       
        
        $education->status=$request->Input('status');
        $education->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('educations')->with('status','education added successfully');
    }
    public function edit($id)
   {
    $education= Education::find($id);
    return view('admin/educations.edit',compact('education'));
    }
    public function update(Request $request,$id){
        $education= Education::find($id);
        $education->institution_name=$request->Input('institution_name');
        
        $education->degree_type=$request->Input('degree_type');
        $education->department=$request->Input('department');
        $education->start_year=$request->Input('start_year');
        $education->passing_year=$request->Input('passing_year');


        $education->status=$request->Input('status');
        $education->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('educations')->with('status','education updated successfully');
    }
    public function destroy($id)
    {
      $education=Education::find($id);
      
      

      $education->delete();
      return redirect('educations')->with('status','education  deleted successfully');

    }
    
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $team=Team::all();
        return view('admin/teams.team',compact('team'));
    }
    public function create()
    {
        return view('admin/teams.create');
    }
    public function store(Request $request){
        $team=new Team;
        $team->name=$request->Input('name');

        
        
        if($request->hasFile('photo'))
        {
          $file=$request->file('photo');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $file->move('uploads/teams/',$filename);
          $team->photo=$filename;
        }
        $team->responsiblity=$request->Input('responsiblity');
       
        $team->status=$request->Input('status');
        $team->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('teams')->with('status','about added successfully');
    }
    public function edit($id)
   {
    $team= Team::find($id);
    return view('admin/teams.edit',compact('team'));
    }
    public function update(Request $request,$id){
        $team= Team::find($id);
        $team->name=$request->Input('name');

       
        
        if($request->hasFile('photo'))
        {
            $destination='uploads/teams/'.$team->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          $file=$request->file('photo');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $file->move('uploads/teams/',$filename);
          $team->photo=$filename;
        }
        $team->responsiblity=$request->Input('responsiblity');
      
        $team->status=$request->Input('status');
        $team->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('teams')->with('status','teams updated successfully');
    }
    public function destroy($id)
    {
      $team=Team::find($id);
      
      $destination='uploads/teams/'.$team->photo;
      if(File::exists($destination)){
        File::delete($destination);
      }

      $team->delete();
      return redirect('teams')->with('status','teams  deleted successfully');

    }
 
}

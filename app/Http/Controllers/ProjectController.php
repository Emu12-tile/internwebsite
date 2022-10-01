<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Home;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $project=Project::all();
        return view('admin/projects.project',compact('project'));
    }
    public function create()
    {
        return view('admin/projects.create');
    }
    public function store(Request $request){
        $project=new Project;
        $project->project_title=$request->Input('project_title');

       
       
        
        if($request->hasFile('project_images'))
        {
          $file=$request->file('project_images');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $filename=uniqid();
          $file->move('uploads/projects/',$filename);
          $project->project_images=$filename;
        }
        $project->project_description=$request->Input('project_description');
        $project->status=$request->Input('status');
        $project->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('project')->with('status','project added successfully');
    }
    public function edit($id)
   {
    $project=Project::find($id);
    return view('admin/projects.edit',compact('project'));
    }
    public function update(Request $request,$id){
        $project= Project::find($id);
        $project->project_title=$request->Input('project_title');
        if($request->hasFile('project_images'))
        {
            $destination='uploads/projects/'.$project->project_images;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          $file=$request->file('project_images');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $filename=uniqid();
          $file->move('uploads/projects/',$filename);
          $project->project_images=$filename;
        }

        $project->project_description=$request->Input('project_description');
      
        
       
        $project->status=$request->Input('status');
        $project->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('project')->with('status','about updated successfully');
    }
    public function destroy($id)
    {
      $project=Project::find($id);
      
      $destination='uploads/projects/'.$project->project_images;
      if(File::exists($destination)){
        File::delete($destination);
      }

      $project->delete();
      return redirect('project')->with('status','project  deleted successfully');

    }
    

}

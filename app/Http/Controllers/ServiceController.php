<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $services=Service::all();
        return view('admin/services.service',compact('services'));
    }
    public function create()
    {
        return view('admin/services.create');
    }
    public function store(Request $request){
        $service=new Service;
        $service->service_name=$request->Input('service_name');

        $service->description=$request->Input('description');
        
       
        
        $service->status=$request->Input('status');
        $service->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('services')->with('status','service added successfully');
    }
    public function edit($id)
   {
    $service= Service::find($id);
    return view('admin/services.edit',compact('service'));
    }
    public function update(Request $request,$id){
        $service= Service::find($id);
        $service->service_name=$request->Input('service_name');
        
        $service->description=$request->Input('description');
       
        $service->status=$request->Input('status');
        $service->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('services')->with('status','service updated successfully');
    }
    public function destroy($id)
    {
      $service=Service::find($id);
      
      

      $service->delete();
      return redirect('services')->with('status','service  deleted successfully');

    }
    
}

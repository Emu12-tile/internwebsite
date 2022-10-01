<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Support\Facades\File;



use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home=Home::all();
        return view('admin/hom.home',compact('home'));
    }
    public function create()
    {
      return view('admin/hom.create') ; 
    }
    public function store(Request $request){
        $home=new Home;
        $home->home_title=$request->Input('home_title');

        $home->home_description=$request->Input('home_description');
       
        if($request->hasFile('logo'))
        {
          $file=$request->file('logo');
          $extention=$file->getClientOriginalExtension();
          $name=time().'.'.$extention;
          $name=uniqid();
          $file->move('uploads/homes/',$name);
          $home->logo=$name;
        }
        if($request->hasFile('home_image'))
        {
          $file=$request->file('home_image');
          $extention=$file->getClientOriginalExtension();
          $filename=time().'.'.$extention;
          $file->move('uploads/homes/',$filename);
          $home->home_image=$filename;
        }
        $home->status=$request->Input('status');
        $home->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect()->back()->with('status','home added successfully');
    }
    public function edit($id)
   {
    $home= Home::find($id);
    return view('admin/hom.edit',compact('home'));

    

    }
    public function update(Request $request,$id){
        $home= Home::find($id);
        $home->home_title=$request->Input('home_title');

        $home->home_description=$request->Input('home_description');
      
        if($request->hasFile('logo'))
        {
            $destination='uploads/homes/'.$home->logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          $file=$request->file('logo');
          $extention=$file->getClientOriginalExtension();
          // $name=time().'.'.$extention;
          $name=uniqid();
          $file->move('uploads/homes/',$name);
          $home->logo=$name;
        }
        if($request->hasFile('home_image'))
        {
            $destination='uploads/homes/'.$home->home_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          $file=$request->file('home_image');
          $extention=$file->getClientOriginalExtension();
          // $filename=time().'.'.$extention;
          $filename=uniqid();
          $file->move('uploads/homes/',$filename);
          $home->home_image=$filename;
        }
        $home->status=$request->Input('status');
        $home->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect()->back()->with('status','home updated successfully');
    }
    public function destroy($id)
    {
      $home=Home::find($id);
      $destination='uploads/home/'.$home->logo;
      if(File::exists($destination)){
        File::delete($destination);
      }
      $destination='uploads/home/'.$home->home_image;
      if(File::exists($destination)){
        File::delete($destination);
      }

      $home->delete();
      return redirect()->back()->with('status','home  deleted successfully');

}}

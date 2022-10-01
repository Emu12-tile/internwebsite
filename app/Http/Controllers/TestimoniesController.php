<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class TestimoniesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  //
  public function index()
  {
    $testimony = Testimony::all();
    return view('admin/testimonies.testimony', compact('testimony'));
  }
  public function create()
  {
    return view('admin/testimonies.create');
  }
  public function store(Request $request)
  {
    $testimony = new Testimony;
    $testimony->name = $request->Input('name');

    $testimony->comment = $request->Input('comment');

    $testimony->role = $request->Input('role');
    if ($request->hasFile('photo')) {
      $file = $request->file('photo');
      $extention = $file->getClientOriginalExtension();
      $filename = time() . '.' . $extention;
      $file->move('uploads/testimonies/', $filename);
      $testimony->photo = $filename;
    }
    $testimony->status = $request->Input('status');
    $testimony->save();
    // $listing->profile_image=$request->Input('profile_image');
    // return view('listing.create');
    return redirect('testimonies')->with('status', 'testimonies added successfully');
  }
  public function edit($id)
  {
    $testimony = Testimony::find($id);
    return view('admin/testimonies.edit', compact('testimony'));
  }
  public function update(Request $request, $id)
  {
    $testimony = Testimony::find($id);
    $testimony->name = $request->Input('name');

    $testimony->comment = $request->Input('comment');
    $testimony->role = $request->Input('role');

    if ($request->hasFile('photo')) {
      $destination = 'uploads/testimonies/' . $testimony->photo;
      if (File::exists($destination)) {
        File::delete($destination);
      }
      $file = $request->file('photo');
      $extention = $file->getClientOriginalExtension();
      $filename = time() . '.' . $extention;
      $file->move('uploads/testimonies/', $filename);
      $testimony->photo = $filename;
    }
    $testimony->status = $request->Input('status');
    $testimony->update();
    // $listing->profile_image=$request->Input('profile_image');
    // return view('listing.create');
    return redirect('testimonies')->with('status', 'testimony updated successfully');
  }
  public function destroy($id)
  {
    $testimony = Testimony::find($id);

    $destination = 'uploads/testimonies/' . $testimony->photo;
    if (File::exists($destination)) {
      File::delete($destination);
    }

    $testimony->delete();
    return redirect('testimonies')->with('status', 'about  deleted successfully');
  }
}

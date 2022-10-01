<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;

class TemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $templates = Template::all();
        return view('admin/templates.template', compact('templates'));
    }
    public function create()
    {
        return view('admin/templates.create');
    }
    public function store(Request $request)
    {
        $template = new Template;
        $template->template = $request->Input('template');

        $template->status = $request->Input('status');
        $template->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('templates')->with('status', 'template added successfully');
    }
    public function edit($id)
    {
        $template = Template::find($id);
        return view('admin/templates.edit', compact('template'));
    }
    public function update(Request $request, $id)
    {
        $template = Template::find($id);
        $template->template = $request->Input('template');



        $template->status = $request->Input('status');
        $template->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('templates')->with('status', 'template updated successfully');
    }
    public function destroy($id)
    {
        $template = Template::find($id);



        $template->delete();
        return redirect('templates')->with('status', 'templates  deleted successfully');
    }
}

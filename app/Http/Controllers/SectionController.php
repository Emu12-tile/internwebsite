<?php

namespace App\Http\Controllers;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        $section=Section::get();
        return view('admin/sections.section',compact('section'));
    }  
    
    public function updateStatus(Request $request)
    {
        $member = Section::find($request->sections);
        $member->status = $request->status;
        $member->save();
        return redirect('sections')->with('status','service added successfully');
        // return response()->json(['success'=>'Status change successfully.']);
    }
}

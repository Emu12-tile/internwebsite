<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()

    {
        $video = Video::all();
        return view('admin/gallery/video.video', compact('video'));
    }
    public function create()
    {
        return view('admin/gallery/video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);

        $video = new Video;

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/videos/', $filename);
            $video->video = $filename;
        }

        // $video->video=$file_name;
        // $video= Video::find($request->video_id);
        $video->status = $request->status;
        $video->save();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('videos')->with('status', 'videos added successfully');
    }
    public function edit($id)
    {
        $video = Video::find($id);
        return view('admin/gallery/video.edit', compact('video'));
    }
    public function update(Request $request, $id)
    {
        $video = Video::find($id);

        if ($request->hasFile('video')) {
            $destination = 'uploads/video/' . $video->video;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('video');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/videos/', $filename);
            $video->video = $filename;
        }

        $video->status = $request->status;
        $video->update();
        // $listing->profile_image=$request->Input('profile_image');
        // return view('listing.create');
        return redirect('videos')->with('status', 'videos updated successfully');
    }
    public function destroy($id)
    {
        $video = Video::find($id);

        $destination = 'uploads/videos/' . $video->video;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $video->delete();
        return redirect('videos')->with('status', 'images  deleted successfully');
    }
    // public function change(Request $request)
    // {
    //     $video = Video::find($request->video_id);
    //     $video->status = $request->status;
    //     $video->save();
    // }
    //     public function updateStatus(Request $request)
    // {
    //     $member = Video::find($request->video);
    //     $member->status = $request->status;
    //     $member->save();
    //     return redirect('videos')->with('status','service added successfully');
    //     // return response()->json(['success'=>'Status change successfully.']);
    // }

}

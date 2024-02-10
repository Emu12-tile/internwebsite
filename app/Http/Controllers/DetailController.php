<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Home;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;

class DetailController extends Controller
{
  public function detail($id)
  {
    $project = Project::find($id);
    $socials = Social::all();
    // $project->project_title;

    // $project->project_description;
    //  return Project::find($id);
    $homes = Home::all();
    return view('detail', [
      'project' => $project,
      'homes' => $homes,
      'socials' => $socials
    ]);
  }
  public function portfolio($id)
  {
    $project = Project::find($id);
    $socials = Social::all();
    // $project->project_title;

    // $project->project_description;
    //  return Project::find($id);
    $homes = Home::all();
    return view('portfolio', [
      'project' => $project,
      'homes' => $homes,
      'socials' => $socials
    ]);
  }

  public function service_detail($id)
  {
    $service = Service::find($id);
    $homes = Home::all();
    $socials = Social::all();
    return view('service-detail', [
      'service' => $service,
      'homes' => $homes,
      'socials' => $socials
    ]);
  }
}

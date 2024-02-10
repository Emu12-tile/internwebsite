<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimoniesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\SubscriptionController;
use  App\Models\Home;
use  App\Models\About;
use App\Models\Project;
use App\Models\Education;
use App\Models\Service;
use App\Models\Experience;
use App\Models\Blog;
use App\Models\Testimony;
use App\Models\Profile;
use App\Models\Team;
use App\Models\Image;
use App\Models\Video;
use App\Models\Section;
use App\Models\Social;
use App\Models\Template;
use App\View\Components\layout\Navbar;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', function () {
//   $templates = Template::all()->where('status', 1);
//   $homes = Home::all();
//   $abouts = About::all();
//   $projects = Project::all()->where('status', 1);
//   $services = Service::all()->where('status', 1);
//   $educations = Education::all()->where('status', 1);
//   $experiences = Experience::all()->where('status', 1);
//   $blogs = Blog::all()->where('status', 1);
//   $testimonies = Testimony::all()->where('status', 1);
//   $profiles = Profile::all();
//   $teams = Team::all()->where('status', 1);
//   $images = Image::all()->where('status', 1);
//   $videos = Video::all()->where('status', 1);
//   $sections = Section::all();

//   $socials = Social::all();

//   return view('index', [
//     'templates' => $templates,
//     'homes' => $homes,
//     'abouts' => $abouts,
//     'projects' => $projects,
//     'services' => $services,
//     'educations' => $educations,
//     'experiences' => $experiences,
//     'blogs' => $blogs,
//     'testimonies' => $testimonies,
//     'teams' => $teams,
//     'profiles' => $profiles,
//     'images' => $images,
//     'videos' => $videos,
//     'sections' => $sections,
//     'socials' => $socials
//   ]);
// });
Route::get('/', function () {
  $templates = Template::all()->where('status', 1);
  $homes = Home::all();
  $abouts = About::all();
  $projects = Project::all()->where('status', 1);
  $services = Service::all()->where('status', 1);
  $educations = Education::all()->where('status', 1);
  $experiences = Experience::all()->where('status', 1);
  $blogs = Blog::all()->where('status', 1);
  $testimonies = Testimony::all()->where('status', 1);
  $profiles = Profile::all();
  $teams = Team::all()->where('status', 1);
  $images = Image::all()->where('status', 1);
  $videos = Video::all()->where('status', 1);
  $sections = Section::all();
  //  ->where ('status','1');
  $socials = Social::all();

  // ->where('status','1')



  return  view('home', [
    'homes' => $homes,
    'abouts' => $abouts,
    'projects' => $projects,
    'services' => $services,
    'educations' => $educations,
    'experiences' => $experiences,
    'blogs' => $blogs,
    'testimonies' => $testimonies,
    'teams' => $teams,
    'profiles' => $profiles,
    'images' => $images,
    'videos' => $videos,
    'sections' => $sections,
    'socials' => $socials,
    'templates' => $templates

  ]);
});
Route::get('/index', function () {
  $templates = Template::all()->where('status', 1);
  $homes = Home::all();
  $abouts = About::all();
  $projects = Project::all()->where('status', 1);
  $services = Service::all()->where('status', 1);
  $educations = Education::all()->where('status', 1);
  $experiences = Experience::all()->where('status', 1);
  $blogs = Blog::all()->where('status', 1);
  $testimonies = Testimony::all()->where('status', 1);
  $profiles = Profile::all();
  $teams = Team::all()->where('status', 1);
  $images = Image::all()->where('status', 1);
  $videos = Video::all()->where('status', 1);
  $sections = Section::all();
  //  ->where ('status','1');
  $socials = Social::all();

  // ->where('status','1')


  return view('index', [
    'templates' => $templates,
    'homes' => $homes,
    'abouts' => $abouts,
    'projects' => $projects,
    'services' => $services,
    'educations' => $educations,
    'experiences' => $experiences,
    'blogs' => $blogs,
    'testimonies' => $testimonies,
    'teams' => $teams,
    'profiles' => $profiles,
    'images' => $images,
    'videos' => $videos,
    'sections' => $sections,
    'socials' => $socials
  ]);

  //  return view('blo',[
  //  'abouts'=>$abouts,
  // ]);

});
// Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit']);
Route::post('/send', [ContactController::class, 'send'])->name('send.email');

// Route::post('/send',[SubscriptionController::class,'send'])->name('send.email');


Auth::routes();


Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('add-home', [HomeController::class, 'create']);
Route::post('add-home', [HomeController::class, 'store']);
Route::get('edit-home/{id}', [HomeController::class, 'edit']);
Route::put('update-home/{id}', [HomeController::class, 'update']);
Route::get('delete-home/{id}', [HomeController::class, 'destroy']);

Route::get('templates', [TemplateController::class, 'index'])->name('template');
Route::get('add-template', [TemplateController::class, 'create']);
Route::post('add-template', [TemplateController::class, 'store']);
Route::get('edit-template/{id}', [TemplateController::class, 'edit']);
Route::put('update-template/{id}', [TemplateController::class, 'update']);
Route::get('delete-template/{id}', [TemplateController::class, 'destroy']);

Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('add-about', [AboutController::class, 'create']);
Route::post('add-about', [AboutController::class, 'store']);
Route::get('edit-about/{id}', [AboutController::class, 'edit']);
Route::put('update-about/{id}', [AboutController::class, 'update']);
Route::get('delete-about/{id}', [AboutController::class, 'destroy']);


Route::get('project', [ProjectController::class, 'index'])->name('project');
Route::get('add-project', [ProjectController::class, 'create']);
Route::post('add-project', [ProjectController::class, 'store']);
Route::get('edit-project/{id}', [ProjectController::class, 'edit']);
Route::put('update-project/{id}', [ProjectController::class, 'update']);
Route::get('delete-project/{id}', [ProjectController::class, 'destroy']);
Route::get('detail/{id}', [DetailController::class, 'detail']);
Route::get('portfolio/{id}', [DetailController::class, 'portfolio']);

Route::get('educations', [EducationController::class, 'index'])->name('education');
Route::get('add-education', [EducationController::class, 'create']);
Route::post('add-education', [EducationController::class, 'store']);
Route::get('edit-education/{id}', [EducationController::class, 'edit']);
Route::put('update-education/{id}', [EducationController::class, 'update']);
Route::get('delete-education/{id}', [EducationController::class, 'destroy']);

Route::get('services', [ServiceController::class, 'index'])->name('service');
Route::get('add-service', [ServiceController::class, 'create']);
Route::post('add-service', [ServiceController::class, 'store']);
Route::get('edit-service/{id}', [ServiceController::class, 'edit']);
Route::put('update-service/{id}', [ServiceController::class, 'update']);
Route::get('delete-service/{id}', [ServiceController::class, 'destroy']);
Route::get('service-detail/{id}', [DetailController::class, 'service_detail']);

Route::get('experiences', [ExperienceController::class, 'index'])->name('experience');
Route::get('add-experience', [ExperienceController::class, 'create']);
Route::post('add-experience', [ExperienceController::class, 'store']);
Route::get('edit-experience/{id}', [ExperienceController::class, 'edit']);
Route::put('update-experience/{id}', [ExperienceController::class, 'update']);
Route::get('delete-experience/{id}', [ExperienceController::class, 'destroy']);

Route::get('blogs', [BlogController::class, 'index'])->name('blog');
Route::get('add-blog', [BlogController::class, 'create']);
Route::post('add-blog', [BlogController::class, 'store']);
Route::get('edit-blog/{id}', [BlogController::class, 'edit']);
Route::put('update-blog/{id}', [BlogController::class, 'update']);
Route::get('delete-blog/{id}', [BlogController::class, 'destroy']);

Route::get('testimonies', [TestimoniesController::class, 'index'])->name('testimony');
Route::get('add-testimony', [TestimoniesController::class, 'create']);
Route::post('add-testimony', [TestimoniesController::class, 'store']);
Route::get('edit-testimony/{id}', [TestimoniesController::class, 'edit']);
Route::put('update-testimony/{id}', [TestimoniesController::class, 'update']);
Route::get('delete-testimony/{id}', [TestimoniesController::class, 'destroy']);

Route::get('teams', [TeamController::class, 'index'])->name('team');
Route::get('add-team', [TeamController::class, 'create']);
Route::post('add-team', [TeamController::class, 'store']);
Route::get('edit-team/{id}', [TeamController::class, 'edit']);
Route::put('update-team/{id}', [TeamController::class, 'update']);
Route::get('delete-team/{id}', [TeamController::class, 'destroy']);

Route::get('profiles', [ProfileController::class, 'index'])->name('profile');
Route::get('add-profile', [ProfileController::class, 'create']);
Route::post('add-profile', [ProfileController::class, 'store']);
Route::get('edit-profile/{id}', [ProfileController::class, 'edit']);
Route::put('update-profile/{id}', [ProfileController::class, 'update']);
Route::get('delete-profile/{id}', [ProfileController::class, 'destroy']);

Route::get('images', [ImageController::class, 'index'])->name('image');
Route::get('add-image', [ImageController::class, 'create']);
Route::post('add-image', [ImageController::class, 'store']);
Route::get('edit-image/{id}', [ImageController::class, 'edit']);
Route::put('update-image/{id}', [ImageController::class, 'update']);
Route::get('delete-image/{id}', [ImageController::class, 'destroy']);

Route::get('videos', [VideoController::class, 'index'])->name('video');
Route::get('add-video', [VideoController::class, 'create']);
Route::post('add-video', [VideoController::class, 'store']);
Route::get('edit-video/{id}', [VideoController::class, 'edit']);
Route::put('update-video/{id}', [VideoController::class, 'update']);
Route::get('delete-video/{id}', [VideoController::class, 'destroy']);
Route::get('updateStatus', [VideoController::class, 'updateStatus'])->name('updateStatus');

// Route::get('/changeStatus',[VideoController::class,'change'])->name('changeStatus');
Route::get('sections', [SectionController::class, 'index'])->name('section');
Route::get('updateStatus', [SectionController::class, 'updateStatus'])->name('updateStatus');


Route::get('socials', [SocialController::class, 'index'])->name('social');
Route::get('add-social', [SocialController::class, 'create']);
Route::post('add-social', [SocialController::class, 'store']);
Route::get('edit-social/{id}', [SocialController::class, 'edit']);
Route::put('update-social/{id}', [SocialController::class, 'update']);
Route::get('delete-social/{id}', [SocialController::class, 'destroy']);

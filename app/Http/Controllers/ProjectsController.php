<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Goal;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Blog;

class ProjectsController extends Controller
{

//    public function index(){
//        return view('projects',[
//            'projects'=> Project::latest()->get()
//        ]);
//
//    }

    public function index(Request $request)
    {
        $educations = Education::all();
        $goals = Goal::all();

        $goalid = $request->input('goalid');
        $education = $request->input('education');
        $filter = array();
        $filter[0] = $goalid;
        $filter[1] = $education;

        if ($filter[0] == null && $filter[1] == null) {
            return view('projects.index', [
                'projects' => Project::latest()->get(), 'filterarray' => $filter, 'goals' => $goals, 'educations' => $educations
                ]);
        } elseif ($filter[1] == null) {
            return view('projects.index', [
                'projects' => Project::latest()
                    ->where('goalid', '=', $filter[0])
                    ->get(),
                'filterarray' => $filter,
                'goals' => $goals,
                'educations' => $educations

            ]);
        } elseif ($filter[0] == null) {
            return view('projects.index', [
                'projects' => Project::latest()
                    ->where('education', '=', $filter[1])
                    ->get(),
                'filterarray' => $filter, 'goals' => $goals,
                'educations' => $educations

            ]);

        } else {
            return view('projects.index', [
                'projects' => Project::latest()
                    ->where('goalid', '=', $filter[0])
                    ->where('education', '=', $filter[1])
                    ->get(),
                'filterarray' => $filter, 'goals' => $goals,
                'educations' => $educations

            ]);
        }
    }

    public function show($id)
    {
        $educations = Education::find($id);
        $project = Project::find($id);
        $blogs = Blog::all();
        if ($project->verified == true) {
            return view('projects.show', ['project' => $project, 'educations' => $educations, 'blogs' => $blogs]);
        } else {
            return view('projects.noperm'); //idk if this works LOL test pls
        }
    }

    public function create()
    {
        $goals = Goal::all();
        $education = Education::all();
        return view('projects.create', ['goals' => $goals, 'educations' => $education]);
    }

    public function store(Request $request)
    {

        $image_name = $request->file('image')->getClientOriginalName();
        request()->file('image')->storeAs('public/images/', $image_name);

        request()->validate([
            'title' => 'required',
            'goalid' => 'required',
            'education' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'contact_name' => 'required',
        ]);

        $project = new Project();
        $project->goalid = request('goalid');
        $project->title = request('title');
        $project->education = request('education');
        $project->excerpt = request('excerpt');
        $project->body = request('body');
        $project->image_name = $image_name;
        $project->reference_url = request('reference_url');
        $project->contact_name = request('contact_name');
        $project->contact_email = request('contact_email');

        $test = request('verification');
        if ($test == "1234") {
            $project->verified = 1;
        }
        $project->save();




        return redirect('/projecten');
    }
}

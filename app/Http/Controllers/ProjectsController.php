<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Goal;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Blog;

class ProjectsController extends Controller
{

    public function index(Request $request)
    {
        //get all educations/goals from database for the dropdown selection
        $educations = Education::all();
        $goals = Goal::all();
        //filter
        //store inputs from filter to variables
        $search = $request->input('search');
        $goalid = $request->input('goalid');
        $education = $request->input('education');

        //define query for projects to get
        $projects_query = Project::latest();
        //if a certain option is used it is added to the query
        if ($search) {
            $projects_query = $projects_query->where('title', 'like' , '%'.$search.'%');
        }
        if ($goalid) {
            $projects_query = $projects_query->where('goalid', '=', $goalid);
        }
        if ($education) {
            $projects_query = $projects_query->where('education', '=', $education);
        }
        //returns the view with the selected options

        return view('projects.index', [
            'projects' => $projects_query->get(),
            'goals' => $goals,
            'educations' => $educations,
            'search' => $search
        ]);
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
        //send all goals and educations from database as variables to use in dropdown menu
        $goals = Goal::all();
        $education = Education::all();
        return view('projects.create', ['goals' => $goals, 'educations' => $education]);
    }


    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'goalid' => 'required',
            'education' => 'required',
            'excerpt' => 'required',
            'body' => 'required',

        ]);
        //assign to database from form
        $project = Project::make($data);
//        $project->goalid = request('goalid');
//        $project->title = request('title');
//        $project->education = request('education');
//        $project->excerpt = request('excerpt');
//        $project->body = request('body');
//        $project->reference_url = request('reference_url');
//        $project->contact_name = request('contact_name');
//        $project->contact_email = request('contact_email');


        $test = request('verification');
        //verification code
        if ($test == "1234") {
            $project->verified = 1;
        }
        $project->save();

        return redirect('/projecten');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Education;
use App\Models\Goal;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //get all educations/goals from database for the dropdown selection
        $educations = Education::all();
        DB
        $goals = Goal::all();
        //filter
        //store inputs from filter to variables
        $search = $request->input('search');
        $goalid = $request->input('goalid');
        $education = $request->input('education');
        $verify = $request->input('verify');
        //define query for projects to get
        $projects_query = Project::latest();
        //if a certain option is used it is added to the query
        if ($search) {
            $projects_query = $projects_query->where('title', 'like', '%' . $search . '%');
        }
        if ($goalid) {
            $projects_query = $projects_query->where('goalid', '=', $goalid);
        }
        if ($education) {
            $projects_query = $projects_query->where('education', '=', $education);
        }
        if ($verify) {
            $projects_query = $projects_query->where('verified', '=', $verify);
        }

        //returns the view with the selected options
        return view('adminProjects.index', [
            'projects' => $projects_query->get(),
            'goals' => $goals,
            'educations' => $educations,
            'search' => $search
        ]);
    }

    public function show($id)
    {
        $project = Project::find($id);
        $educations = Education::find($id);
        $blogs = Blog::all();

        return view('adminProjects.show', ['project' => $project, 'educations' => $educations, 'blogs' => $blogs]);
    }

    public function edit($id)
    {
        $project = Project::find($id);
        $goals = Goal::all();

        $educations = Education::all();
        return view('adminProjects.edit', ['project' => $project, 'educations' => $educations, 'goals' => $goals]);
    }


    public function update($id)
    {

        request()->validate([
            'title' => 'required',
            'goalid' => 'required',
            'education' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'verified' => 'required',
        ]);

        $project = Project::find($id);
        $project->goalid = request('goalid');
        $project->title = request('title');
        $project->education = request('education');
        $project->excerpt = request('excerpt');
        $project->body = request('body');

        $project->verified = request('verified');
        $project->reference_url = request('reference_url');
        $project->save();

        return redirect('adminProjecten/' . $project->id);
    }

    public function destroy($id)
    {
        Project::find($id)->delete();

        return redirect('adminProjecten/');
    }
}

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

        $verify = $request->input('verify');
        $goalid = $request->input('goalid');

        $search = $request->input('search');

        $projects_query = Project::latest();

        if ($goalid) {
            $projects_query = $projects_query->where('goalid', '=', $goalid);
        }
        if ($verify) {
            $projects_query = $projects_query->where('verified', '=', $verify);
        }
        if ($search) {
            $projects_query = $projects_query->where('title', 'like' , '%'.$search.'%');

        }

        return view('adminProjects.index', [
            'projects' => $projects_query->get()
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
            'contact_name' => 'required',
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
        $project->contact_name = request('contact_name');
        $project->contact_email = request('contact_email');

        $project->save();

        return redirect('adminProjecten/' . $project->id);
    }

    public function destroy($id)
    {
        Project::find($id)->delete();

        return redirect('adminProjecten/');
    }
}

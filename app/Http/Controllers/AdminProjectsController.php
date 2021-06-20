<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Goal;
use Illuminate\Http\Request;
use App\Models\Project;

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

        return view('adminProjects.show', ['project' => $project]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'goalid' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $project = new Project();
        $project->goalid = request('goalid');
        $project->title = request('title');
        $project->excerpt = request('excerpt');
        $project->body = request('body');
        $project->verified = request('verified');
        $project->save();

        return redirect('huurders');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        $goals = Goal::all();

        $educations = Education::all();
        return view('adminProjects.edit', ['project' => $project, 'educations'=> $educations, 'goals' =>  $goals]);
    }

    public function update($id)
    {
//        TODO maak dit werkend stefan!!!!!
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'goalid' => 'required',
            'verified' => 'required',
            'body' => 'required'
        ]);

        $project = Project::find($id);
        $project->title = request('title');
        $project->excerpt = request('excerpt');
        $project->body = request('body');
        $project->goalid = request('goalid');
        $project->verified = request('verified');
        $project->save();

        return redirect('adminProjects.index/' . $project->id);
    }

    public function destroy($id)
    {
        Project::find($id)->delete();

        return redirect('adminProjects.index/');
    }
}

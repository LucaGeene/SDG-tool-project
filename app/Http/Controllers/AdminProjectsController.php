<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Goal;
use App\Models\Education;

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
        $filter = array();
        $filter[0] = $verify;
        $filter[1] = $goalid;

        if ($filter[0] ==null && $filter[1] == null) {
            return view('adminProjects.index', [
                'projects' => Project::latest()->get(), 'filterarray' => $filter
            ]);
        } elseif ($filter[1] == null) {
            return view('adminProjects.index', [
                'projects' => Project::latest()
                    ->where('verified', '=', $filter[0])
                    ->get(),
                'filterarray' => $filter
            ]);
        } elseif ($filter[0] == null) {
            return view('adminProjects.index', [
                'projects' => Project::latest()
                    ->where('goalid', '=', $filter[1])
                    ->get(),
                'filterarray' => $filter
            ]);
        } else {
            return view('adminProjects.index', [
                'projects' => Project::latest()
                    ->where('verified', '=', $filter[0])
                    ->where('goalid', '=', $filter[1])
                    ->get(),
                'filterarray' => $filter
            ]);
        }
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
        $project->education = request('education');
        $project->excerpt = request('excerpt');
        $project->body = request('body');
        $project->reference_url = request('reference_url');
        $project->contact_name = request('contact_name');
        $project->contact_email = request('contact_email');
        $test = request('verification');
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
        $project->goalid = request('goalid');
        $project->title = request('title');
        $project->education = request('education');
        $project->excerpt = request('excerpt');
        $project->body = request('body');
        $project->reference_url = request('reference_url');
        $project->contact_name = request('contact_name');
        $project->contact_email = request('contact_email');
        $test = request('verification');
        $project->save();

        return redirect('adminProjecten/' . $project->id);
    }

    public function destroy($id)
    {
        Project::find($id)->delete();

        return redirect('adminProjecten/');
    }
}

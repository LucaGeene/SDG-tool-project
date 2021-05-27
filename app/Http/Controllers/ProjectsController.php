<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{

    public function index(){
        return view('projects',[
            'projects'=> Project::latest()->get()
        ]);

    }

    public function show($id)
    {
        $project = Project::find($id);
        if($project->verified == true){
            return view('projects.show', ['project' => $project]);
        }


    }

    public function create()
    {
        return view('projects/create');
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

        $test = request('verified');
        if ($test  == "1234"){
            $project->verified = 1;
        }


        $project->save();

        return redirect('projecten');
    }


}

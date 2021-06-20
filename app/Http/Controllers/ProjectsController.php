<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Goal;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{

    public function index(Request $request)
    {
        //get all from database
        $educations = Education::all();
        $goals = Goal::all();
        //filter
        //assign inputs from filter to variables
        $goalid = $request->input('goalid');
        $education = $request->input('education');
        $search = $request->input('search');

        $projects_query = Project::latest();

        if ($goalid) {
            $projects_query = $projects_query->where('goalid', '=', $goalid);
        }
        if ($education) {
            $projects_query = $projects_query->where('education', '=', $education);
        }
        if ($search) {
            $projects_query = $projects_query->where('title', 'like' , '%'.$search.'%');
        }

        return view('projects.index', [
            'projects' => $projects_query->get(),
            'goals' => $goals,
            'educations' => $educations

        ]);
    }
    //old filter
//        $filter = array();
//        //assign variables to the array
//        $filter[0] = $goalid;
//        $filter[1] = $education;
    //$projects_query = $projects_query->where('goalid', 'like' , '%'.$goalid.'%');

//        //if neither filter options are used
//        if ($filter[0] == null && $filter[1] == null) {
//            return view('projects.index', [
//                'projects' => Project::latest()->get(),
//                'filterarray' => $filter,
//                'goals' => $goals,
//                'educations' => $educations
//
//            ]);
//            //if only SDG-goals filter is used
//            //returns projects with a certain SDG-Goal id
//        } elseif ($filter[1] == null) {
//            return view('projects.index', [
//                'projects' => Project::latest()
//                    ->where('goalid', '=', $filter[0])
//                    ->get(),
//                'filterarray' => $filter,
//                'goals' => $goals,
//                'educations' => $educations
//
//            ]);
//            //if only Educations filter is used
//            //returns projects with a certain Education id
//        } elseif ($filter[0] == null) {
//            return view('projects.index', [
//                'projects' => Project::latest()
//                    ->where('education', '=', $filter[1])
//                    ->get(),
//                //send all goals and educations from database as variables to use in dropdown menu
//                'goals' => $goals,
//                'educations' => $educations
//
//            ]);
//            //if both filter options are used
//            //returns projects with a certain SDG-Goal id
//            //returns projects with a certain Education id
//        } else {
//            return view('projects.index', [
//                'projects' => Project::latest()
//                    ->where('goalid', '=', $filter[0])
//                    ->where('education', '=', $filter[1])
//                    ->get(),
//                //send all goals and educations from database as variables to use in dropdown menu
//                'goals' => $goals,
//                'educations' => $educations
//
//            ]);
//        }


    public function show($id)
    {
        $project = Project::find($id);
        if ($project->verified == true) {
            return view('projects.show', ['project' => $project]);
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
            'contact_name' => 'required',
        ]);
        //assign to database from form
        $project = new Project();
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

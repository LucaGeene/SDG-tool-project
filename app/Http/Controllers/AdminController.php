<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class adminController extends Controller
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

        if (count($filter)>0) {
            return view('admin', [
                'projects' => Project::latest()->get(), 'filterarray' => $filter

            ]);
        } elseif ($filter[1] == null) {
            return view('admin', [
                'projects' => Project::latest()
                    ->where('verified', '=', $filter[0])
                    ->get(),
                'filterarray' => $filter

            ]);
        } elseif ($filter[0] == null) {
            return view('admin', [
                'projects' => Project::latest()
                    ->where('goalid', '=', $filter[1])
                    ->get(),
                'filterarray' => $filter

            ]);

        } else {
            return view('admin', [
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

        return view('admin.show', ['project' => $project]);
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
        return view('admin.edit', ['project' => $project]);
    }

    public function update($id)
    {
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
        return redirect('admin/' . $project->id);
    }


    public function destroy($id)
    {
        Project::find($id)->delete();


        return redirect('admin/');
    }
}

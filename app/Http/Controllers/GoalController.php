<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\goal;
use App\Models\Project;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('goals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('goals.show', ['id'=>$id, 'projects'=> Project::latest()->get()]);
    }

}

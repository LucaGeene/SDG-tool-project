<?php

namespace App\Http\Controllers;
use App\Models\Subgoal;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Goal;
use App\Models\Project;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('goals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\goal  $goal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('goals.show', ['id'=>$id, 'projects'=> Project::latest()->get(), 'goals' => Goal::all(), 'subgoals' => Subgoal::all(), 'users'=>User::latest()->get()]);
    }

}

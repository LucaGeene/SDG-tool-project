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
    public function index()
    {
        return view('goals.index');
    }

    public function show($id)
    {
        return view('goals.show', ['id'=>$id, 'projects'=> Project::latest()->get(), 'goals' => Goal::all(), 'subgoals' => Subgoal::all(), 'users'=>User::latest()->get()]);
    }
}

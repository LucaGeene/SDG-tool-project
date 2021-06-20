<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Project;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index() {

        $projects = DB::table('projects')
            ->where('verified', '=', 1)
            ->latest()
            ->take(3)
            ->get();

        $goals = Goal::all();

        return view('welcome', ['projects' => $projects, 'goals' => $goals]);
    }
}

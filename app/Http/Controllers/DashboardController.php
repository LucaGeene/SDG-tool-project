<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;

class DashboardController extends Controller
{
    public function index() {

        $projects = DB::table('projects')
            ->where('verified', '=', 1)
            ->latest()
            ->take(3)
            ->get();



//        $mysqli = new mysqli("127.0.0.1", "root", NULL, "sample_project", 3306);

        echo $mysqli->host_info . "\n";

        $mysqli = mysqli_connect('127.0.0.1', 'root', NULL, 'sample_project');
        $result = mysqli_query($mysqli,"select COUNT(*) from projects group by goalid" ) or die (mysqli_error());

dd($result);

        $goals = Goal::all();

        return view('welcome', ['projects' => $projects, 'goals' => $goals]);
    }
}

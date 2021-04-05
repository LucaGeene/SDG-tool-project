<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\goalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;
use App\Models\Project;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//route voor dashboard

Route::get('/', function () {

    $projects = Project::latest()->get();



    $fprojects = array();

    foreach ($projects as $project){
        if($project->verified == true){
            $fprojects[] = $project;
        }
    }
    $ffprojects = array();
    for ($i = 0; $i < 3; $i++) {
        $ffprojects[$i] = $fprojects[$i];
    }
        return view('welcome', ['projects' => $ffprojects]);



});







//route voor login
Auth::routes();



//routes voor doelen

Route::get('doelen', [goalController::class, 'index']);
Route::get('doelen/{goal}', [goalController::class, 'show']);

//routes voor opleidingen
Route::get('/opleidingen', function () {
    return view('educations');
});




//routes voor projecten

//CREATE
Route::get('projecten/create', [ProjectsController::class, 'create']);
Route::post('projecten', [ProjectsController::class, 'store']);

//READ
Route::get('projecten', [ProjectsController::class, 'index']);
Route::get('projecten/{project}', [ProjectsController::class, 'show']);

//routes voor admin

//READ
Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/{project}', [AdminController::class, 'show']);

//UPDATE
Route::get('admin/{project}/edit', [AdminController::class, 'edit']);
Route::put('admin/{project}', [AdminController::class, 'update']);

//DELETE
Route::delete('admin/{project}', [AdminController::class, 'destroy']);

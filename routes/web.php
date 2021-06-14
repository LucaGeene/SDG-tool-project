<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\goalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AdminEducationsController;
use App\Http\Controllers\AdminProjectsController;
use App\Models\Project;
use App\Models\Goal;
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
//route voor dashboardController

Route::get('/', [DashboardController::class, 'index' ]);
//route voor login
Auth::routes();



//routes voor doelen

//routes for doelen

Route::get('doelen', [goalController::class, 'index']);
Route::get('doelen/{goal}', [goalController::class, 'show']);

//routes voor opleidingen

//routes for educations
//READ
Route::get('opleidingen', [EducationController::class, 'index']);
Route::get('opleidingen/{id}', [EducationController::class, 'show']);

//Route::resource('/opleidingen', EducationController::class);


//routes for AdminEducations
//READ
Route::get('adminEducations', [AdminEducationsController::class, 'index']);
Route::get('adminEducations/{id}', [AdminEducationsController::class, 'show']);
//CREATE
Route::get('adminEducations/create', [AdminEducationsController::class, 'create']);
Route::post('adminEducations', [AdminEducationsController::class, 'store']);
//UPDATE
Route::get('adminEducations/{education}/edit', [AdminEducationsController::class, 'edit']);
Route::put('adminEducations/{education}', [AdminEducationsController::class, 'update']);
//DELETE
Route::delete('adminEducations/{education}', [AdminEducationsController::class, 'destroy']);


//routes for projects

//CREATE
Route::get('projecten/create', [ProjectsController::class, 'create']);
Route::post('projecten', [ProjectsController::class, 'store']);

//READ
Route::get('projecten', [ProjectsController::class, 'index']);
Route::get('projecten/{project}', [ProjectsController::class, 'show']);

//routes for adminProjects

//READ
Route::get('adminProjects', [AdminProjectsController::class, 'index']);
Route::get('adminProjects/{project}', [AdminProjectsController::class, 'show']);

//UPDATE
Route::get('adminProjecten/{project}/edit', [AdminProjectsController::class, 'edit']);
Route::put('adminProjecten/{project}', [AdminProjectsController::class, 'update']);

//DELETE
Route::delete('adminProjecten/{project}', [AdminProjectsController::class, 'destroy']);

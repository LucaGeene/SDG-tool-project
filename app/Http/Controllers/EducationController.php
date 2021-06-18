<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(){
        return view('educations.index',[
            'educations'=> Education::latest()->get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Education $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $education = Education::find($id);

        return view( 'educations.show', ['educations' => $education, 'projects' => Project::latest()->get()]);
    }
}


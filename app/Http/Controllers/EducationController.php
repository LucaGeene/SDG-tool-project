<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use League\CommonMark\Delimiter\Processor\EmphasisDelimiterProcessor;

class EducationController extends Controller
{
    public function index(){
        return view('educations',[
            'educations'=> Education::latest()->get()
        ]);
    }

    public function show($id)
    {
        $education = Education::find($id);
        return view( 'educations.show', ['education' => $education]);
    }
}


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

    public function create()
    {
        return view('educations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Education::create([
            'name' => request('name'),
            'description' => request('description'),
            'body' => request('body'),
        ]);

        return redirect('opleidingen');
    }

    public function edit($id)
    {
        $education = Education::find($id);
        return view('educations.edit',['education' => $education]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Education::create([
            'name' => request('name'),
            'description' => request('description'),
            'body' => request('body'),
        ]);

        return redirect('opleidingen');
    }

    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();

        return redirect('/opleidingen');
    }
}


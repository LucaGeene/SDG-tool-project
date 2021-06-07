<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class AdminEducationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('adminEducations.index',[
            'educations'=> Education::latest()->get()
        ]);
    }

    public function show($id)
    {
        $education = Education::find($id);
        return view( 'adminEducations.show', ['educations' => $education]);
    }

    public function create()
    {
        return view('adminEducations.create');
    }

    public function store($id)
    {
        request()->validate([
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        $education = Education::find($id);
        $education->name = request('name');
        $education->description = request('description');
        $education->body = request('body');
        $education->save();

        return redirect('adminEducations.index');
    }

    public function edit($id)
    {
        $education = Education::find($id);
        return view('adminEducations.edit',['educations' => $education]);
    }

    public function update($id)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $education = Education::find($id);
        $education->name = request('name');
        $education->description = request('description');
        $education->body = request('body');
        $education->save();

        return redirect('adminEducations.index');
    }

    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();

        return redirect('/adminEducations.index');
    }
}

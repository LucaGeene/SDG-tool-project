<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($project)
    {

        $blogs = Blog::where('project_id', '=', $project)->latest()->get();
//        dd($blogs);
        return view( 'blogs.index', ['blogs' => $blogs, 'project' =>$project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create($project)
    {
        return view('blogs.create', [ 'project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, $project)
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'contact_name' => 'required',
        ]);

        $blog = new Blog();
        $blog->project_id = $project;
        $blog->title = request('title');
        $blog->activity_type = request('activity_type');
        $blog->excerpt = request('excerpt');
        $blog->body = request('body');
        $blog->reference_url = request('reference_url');
        $blog->contact_name = request('contact_name');
        $blog->contact_email = request('contact_email');

        $blog->save();


        return redirect()->route('show-all-blogs', ['project' =>$project]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($project, $blog)
    {
        $blogs = Blog::find($blog);


            return view('blogs.show', ['blog' => $blogs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //TODO voeg een kut edit toe want dat is nodig blijkbaar
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($project, $blog)
    {
        $blogs = Blog::find($blog);

        $blogs->delete();
        return redirect()->route('show-all-blogs', ['project' =>$project]);
    }
}

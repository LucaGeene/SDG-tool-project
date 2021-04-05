@extends('layouts.app')

@section('content')
    <hr class="my-5" />
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul>
                    @foreach($projects as $project)
                        @if($project->verified == true)
                        <div class="box">
                            <li><a href="projecten/{{$project->id}}"><b><h4>{{$project->title}}</h4></b></a><br>
                                <h5>{{$project->excerpt}}</h5></li>
                        </div>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <a id='{{ Request::path() === 'projects' ? 'current-page' : '' }}' href="projecten/create">Project toevoegen</a>
            </div>
        </div>
    </div>
@endsection

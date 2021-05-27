@extends('layouts.app')

@section('content')
    <main>
        <img src="{{asset("assets/$id.png")}}" >
        <div class="container">

    <h5>{{$users->name}}</h5>
                <div class="row">
                    <ul>
                        @foreach($projects as $project)
                            @if($project->verified == true)
                            @if($project->goalid == $id)
                        <div class="box">
                            <li><a href="/projecten/{{$project->id}}"><b><h4>{{$project->title}}</h4></b></a><br>
                                <h5>{{$project->excerpt}}</h5></li>
                        </div>
                            @endif
                            @endif
                        @endforeach
                    </ul>
                </div>


        </div>
    </main>
@endsection


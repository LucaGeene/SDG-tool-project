@extends('layouts.app')

@section('content')
    <main>

        @foreach($goals as $goal)
            @if($goal->id == $id)
                <div class="container" style="background-color: {{$goal->color}}" id="subgoal">
                    <img id="goal" src="/assets/{{$id}}.png">

                    <div class="box">

                        <h3>{{$goal->title}}</h3>
                        <br>
                        <h5><b>{{$goal->header}}</b></h5>
                        <h5>{{$goal->description}}</h5>
                        <br>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading active">
                            <h3 class="panel-title">
                                <a class="btn" role="button" data-bs-toggle="collapse"
                                   data-bs-target="#subgoalCollapse"
                                   aria-expanded="false" aria-controls="subgoalCollapse"><h3 class="panel-title">Sub-doelen</h3></a>
                            </h3>
                            <div class="collapse" id="subgoalCollapse">

                                @foreach($subgoals as $subgoal)
                                    @if($subgoal->goal_id == $id)
                                        <div class="row">
                                            <h5><b>{{$subgoal->name}}:</b> {{$subgoal->description}}</h5>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        <div class="container">

            <div class="row">
                <ul>
                    @foreach($projects as $project)
                        @if($project->verified == true && $project->goalid == $id)
                            <div class="box">
                                <li><a href="/projecten/{{$project->id}}"><b><h4>{{$project->title}}</h4></b></a><br>
                                    <h5>{{$project->excerpt}}</h5></li>

                            </div>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection


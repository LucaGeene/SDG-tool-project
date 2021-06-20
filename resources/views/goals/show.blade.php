@extends('layouts.app')

@section('content')
    <main>

        <div class="row">
        @foreach($goals as $goal)
            @if($goal->id == $id)
                <div class="col-md-5" style="background-color: {{$goal->color}}" id="subgoal">
                    <img id="goal" class="mb-3" src="/assets/{{$id}}.png">

                    <div class="box  ml-3">

                        <h3>{{$goal->title}}</h3>
                        <br>
                        <h5><b>{{$goal->header}}</b></h5>
                        <h5>{{$goal->description}}</h5>
                        <br>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading active">
                            <h3 class="panel-title text-center mb-3">
                                Sub-doelen</h3>
                            </h3>
                            <div>

                                @foreach($subgoals as $subgoal)
                                    @if($subgoal->goal_id == $id)
                                        <div class="row ml-1">
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

        <div class="col-md-7 mt-2">

                    <!--shows all verified projects for the selected goal-->
                    @foreach($projects as $project)
                        @if($project->verified == true && $project->goalid == $id)
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img
                                            style="height: 350px;
                                                   object-fit: cover"
                                            src="{{ asset('storage/images/'. $project->image_name) }}"
                                            onerror="this.onerror=null; this.src='https://mdbootstrap.com/img/new/standard/nature/184.jpg'"
                                            class="img-fluid rounded"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{$project->title}}
                                        </h5>
                                        <p class="card-text">
                                            {{$project->excerpt}}
                                        </p>
                                        <a href="/projecten/{{$project->id}}" class="btn btn-primary">Ga naar</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
        </div>
        </div>
    </main>
@endsection


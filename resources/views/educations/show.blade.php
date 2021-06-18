@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <br>
{{--                    Displays the information from selected education                    --}}
                    <li>
                        <h4>{{$educations->name}}</h4><br>
                        <h5>{{$educations->description}}</h5>
                        <h5>{{$educations->body}}</h5>
                    </li>
                </div>

                @foreach($projects as $project)
                    @if($project->verified == true && $project->education == $educations->name)
                        <div class="mb-3">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img
                                        style="height: 300px;"
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


@extends('layouts.app')

@section('content')
    <main>
        <div class="col-12 text-center">
            <h1 class="bg-light">{{$educations->name}} <a class="btn btn-primary mb-12  ml-3" href="{{$educations->url}}" target="_blank">Meer info</a></h1>
            <h5 class="text-dark">{{$educations->description}}</h5>
            <div class="container col-10">
                <hr class="my-4" />
            </div>
            <div class="col-md-9">
                <p>Hieronder kunt u de meest recente projecten vinden waar de opleiding {{$educations->name}} aan werkt/gewerkt heeft.</p>
            </div><br>
        </div>

        <div class="container">
            @foreach($projects as $project)
                @if($project->verified == true && $project->education == $educations->name)
                    <div class="card-columns">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img
                                src="{{ asset('storage/images/'. $project->image_name) }}"
                                onerror="this.onerror=null; this.src='https://mdbootstrap.com/img/new/standard/nature/184.jpg'"
                                class="img-fluid rounded"
                            />
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">
                                {{$project->title}}
                            </h2>
                            <p class="card-text">
                                {{$project->excerpt}}
                            </p>
                            <p>Voor het laatst aangepast op: {{$project->updated_at}}</p>
                            <a href="/projecten/{{$project->id}}" class="btn btn-primary container float-right">Ga naar</a>
                        </div>
                    </div>
                    <hr class="my-3 col-md-10"/>
                @endif
            @endforeach
            </div>
        </div>
    </main>
@endsection


@extends('layouts.app')

@section('content')
    <main class="">
        <div
            class="bg-image thumbnail-bg row "
            style="
    background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/76.jpg');
    height: 355px;
    object-fit: cover;
  "
        >
            <div class="col-12 text-center align-self-center">
                <h1 class="">{{$project->title}}</h1>
            </div>
        </div>

        <hr/>
        <div class="col-md-4">
            <a id='current-page' class="btn btn-primary" href="{{$project->id}}/edit">edit</a>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-sm-7">
                    <br><h5>{{$project->body}}</h5>
                    <hr class="">
                    <div class="">
                        <div class="rounded"><a href="/doelen/{{$project->goalid}}">
                                <img src="/assets/{{$project->goalid}}.png" class="img-fluid rounded"></a></div>
                    </div>
                    <hr class="">
                    <div class="mt-3">
                        <h3><a href="/opleidingen/{{$educations->id}}">{{$project->education}}</a></h3>
                        <p>{{$educations->description}}</p>
                    </div>
                </div>
                <div class="col-1">
                    <hr style="border-left: 1px solid;
                    height: 100%;
                    width: 1px;">
                </div>
                <div class="col-4 mt-3">
                    <p>{{$project->body}}</p>
                </div>
            </div>
        </div>
    </main>



@endsection

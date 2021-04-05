@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <li><h4>{{$project->title}}</h4></b></a><br><h5>{{$project->body}}</h5></li>
                </div>
                <div class="col-md-4">
                    <a id='current-page' href="{{$project->id}}/edit">edit</a>
                </div>
            </div>
        </div>
    </main>
@endsection


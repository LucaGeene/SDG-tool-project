@extends('layouts.app')

@section('content')
    <main>
        <hr class="my-5" />

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <li><h4><b>{{$project->title}}</b></h4></a><br><h5>{{$project->body}}</h5></li>
                </div>
            </div>
        </div>
    </main>
@endsection

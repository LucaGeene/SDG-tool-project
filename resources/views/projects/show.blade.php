@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <li><h4>{{$project->title}}</h4></b></a><br><h5>{{$project->body}}</h5></li>
                </div>

            </div>
        </div>
    </main>
@endsection


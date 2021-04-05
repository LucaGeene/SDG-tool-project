@extends('layouts.app')

@section('content')
    <hr class="my-5" />
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul>
                    @foreach($projects as $project)
                        <div class="box">
                            <li><a href="admin/{{$project->id}}"><b><h4>{{$project->title}}</h4></b></a><br>
                                <h5>{{$project->excerpt}}</h5></li>
                        </div>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
@endsection

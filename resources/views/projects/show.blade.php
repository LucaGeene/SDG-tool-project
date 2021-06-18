@extends('layouts.app')

@section('content')
    <main class="mt-3">
        <div class="col-12 text-center">
            <h1 class="bg-light">{{$project->title}}</h1>
        </div>
        <hr class="my-5" />

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <br><h5>{{$project->body}}</h5>
                </div>
            </div>
        </div>
    </main>
@endsection

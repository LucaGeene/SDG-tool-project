@extends('layouts.app')

@section('content')
    <main class="mt-3">
        <div class="col-12 text-center">
            <h1 class="bg-light">{{$educations->name}}</h1>
        </div>
        <hr class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <br>
                    <!--Displays the information from selected education-->
                    <li>
                        <h4>{{$educations->name}}</h4><br>
                        <h5>{{$educations->description}}</h5>
                        <h5>{{$educations->body}}</h5>
                    </li>
                </div>
                <!--Button for editing the selected education-->
                <div class="col-md-4">
                <a id='current-page' class="btn-primary btn" href="{{$educations->id}}/edit">edit</a>
                </div>
            </div>
        </div>
    </main>
@endsection

